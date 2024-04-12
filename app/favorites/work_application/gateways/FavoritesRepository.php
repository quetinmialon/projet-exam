<?php

namespace App\favorites\work_application\gateways;

use App\favorites\work_application\entities\Favorite;

interface FavoritesRepository
{
    public function getUserFavoriteByProductId(int $userId, string $productId): ?Favorite;
    public function save(Favorite $favorite): void;
    public function delete(Favorite $favorite): void;
}
