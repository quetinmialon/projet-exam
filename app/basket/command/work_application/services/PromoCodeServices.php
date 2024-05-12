<?php

namespace App\basket\command\work_application\services;
use App\basket\command\work_application\entities\PromoCode;
use App\basket\command\work_application\gateways\PromoCodeRepository;

class PromoCodeServices{

    public function __construct(private PromoCodeRepository $promoCodeRepository){}
    public function create(string $label, string $type, int $value){       
        if($this->promoCodeExists($label)){
            return null;
        };

        $codePromo = PromoCode::create($label, $type, $value);
        if(!$codePromo){
            return null;
        }
        $this->promoCodeRepository->save($codePromo);

    }

    private function promoCodeExists(string $label):bool{
        return $this->promoCodeRepository->getByLabel($label) ? true : false;
    }

    public function deletePromoCode(string $label){
        $promoCode = $this->promoCodeRepository->getByLabel($label);
        if(!$promoCode){
            return;
        }
        $this->promoCodeRepository->delete($promoCode);
    }
}