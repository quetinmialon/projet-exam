<?php
namespace App\basket\query\work_application\queries;



interface GetPromoCodeByLabel {
    public function execute(string $Label):array;
}