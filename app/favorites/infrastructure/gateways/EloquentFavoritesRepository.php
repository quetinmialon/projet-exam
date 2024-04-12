<?php

namespace App\favorites\infrastructure\gateways;

use App\favorites\infrastructure\gateways\models\Favorite;
use App\favorites\work_application\entities\Favorite as WorkApplicationFavorite;
use App\favorites\work_application\gateways\FavoritesRepository;

class EloquentFavoritesRepository implements FavoritesRepository
{

    public function getUserFavoriteByProductId(int $userId, string $productId): ?WorkApplicationFavorite
    {
        $favoriteInDb = Favorite::where('productId', $productId)->where('userId', $userId)->first();
        if (!$favoriteInDb) {
            return null;
        }
        return new WorkApplicationFavorite($favoriteInDb->userId, $favoriteInDb->productId);
    }

    public function save(WorkApplicationFavorite $favorite): void
    {
       Favorite::create([
           'userId' => $favorite->userId,
           'productId' => $favorite->productId
       ]);
    }

    public function delete(WorkApplicationFavorite $favorite): void
    {
        Favorite::where('productId', $favorite->productId)->where('userId', $favorite->userId)->delete();
    }
}
