<?php

namespace App\favorites\work_application\entities;

class Favorite
{
    public function __construct(public int $userId, public string $productId) {}
}
