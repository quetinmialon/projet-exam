<?php

namespace App\basket\command\infrastructure\gateways;

use App\basket\command\infrastructure\models\PromoCodeModel;
use App\basket\command\work_application\gateways\PromoCodeRepository;
use App\basket\command\work_application\entities\PromoCode;

class EloquentPromoCodeRepository implements PromoCodeRepository{
    public function getBylabel (string $codePromoLabel):?PromoCode{

        $promoCodeInDb = PromoCodeModel::where('label','=',$codePromoLabel)->first();
        if(!$promoCodeInDb){return null;}
        return new PromoCode($codePromoLabel, $promoCodeInDb['type'],$promoCodeInDb['value']);

    }

    public function save(PromoCode $promoCode):void{
        $snapshot = $promoCode->snapshot();
        PromoCodeModel::updateOrCreate(['label'=> $snapshot['label']],$snapshot);
    }
}