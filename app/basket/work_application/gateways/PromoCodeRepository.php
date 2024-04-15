<?php

namespace App\basket\work_application\gateways;
use App\basket\work_application\entities\PromoCode;

interface PromoCodeRepository{
    public function getByLabel(string $codePromoLabel):?PromoCode;

}