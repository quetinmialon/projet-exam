<?php

namespace App\favorites\work_application\services;

use App\favorites\work_application\entities\Favorite;
use App\favorites\work_application\gateways\FavoritesRepository;
use App\products\models\Product;

class FavoriteService{

    public function __construct(private FavoritesRepository $favoritesRepository) {}

    public function addToFavorite($userId, $productId) {
        $product = Product::findOrFail($productId);
        if (!$product) {
            return;
        }
        if($this->isProductInFavorites($userId,$productId))
        {
            return;
        }

        $favorite = new Favorite($userId, $productId);
        $this->favoritesRepository->save($favorite);
    }

    public function isProductInFavorites(int $userId, string $productId)
    {
        $favorite = $this->favoritesRepository->getUserFavoriteByProductId($userId, $productId);
        if($favorite){
            return true;
        }
        return false;
    }
    public function removeFromFavorites($userId, $productId)
    {
        $favorite = $this->favoritesRepository->getUserFavoriteByProductId($userId, $productId);
        if(!$favorite){
            return;
        }
        $this->favoritesRepository->delete($favorite);
    }

}
