<?php

namespace App\basket\query\infrastructure\queries;
use App\basket\command\infrastructure\models\PromoCodeModel;
use App\basket\query\work_application\queries\GetAllPromoCodes;

class EloquentGetAllPromoCodes implements GetAllPromoCodes{
    public function execute(): array{
    $promoCodes = PromoCodeModel::all();
    return $promoCodes->toArray();
}
}