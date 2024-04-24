<?php

namespace App\basket\query\infrastructure\queries;
use App\basket\command\infrastructure\models\PromoCodeModel;
use App\basket\query\work_application\queries\GetPromoCodeByLabel;

class EloquentGetPromoCodeByLabel implements GetPromoCodeByLabel{
    public function execute(string $label): array{
    $promoCodes = PromoCodeModel::where('label','=',$label)->first();
    return $promoCodes->toArray();
}
}