<?php

namespace App\products\work_application\gateways;

use App\products\work_application\entities\Product;
interface ProductRepository{
    public function getById(string $productId): ?Product;
}