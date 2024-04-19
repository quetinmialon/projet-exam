<?php 

namespace App\basket\infrastructure\gateways;

use App\basket\infrastructure\models\PromoCodeModel;
use App\basket\work_application\gateways\PromoCodeRepository;
use App\basket\work_application\entities\PromoCode;

class EloquentPromoCodeRepository implements PromoCodeRepository{
    public function getBylabel (string $codePromoLabel):?PromoCode{

        $promoCodeInDb = PromoCodeModel::where('label','=',$codePromoLabel)->first();
        if(!$promoCodeInDb){return null;}
        return new PromoCode($codePromoLabel);
            
    }
}