<?php

namespace App\basket\command\work_application\gateways;
use App\basket\command\work_application\entities\PromoCode;

interface PromoCodeRepository{
    public function getByLabel(string $codePromoLabel):?PromoCode;

}
