<?php
namespace App\favorites\services;

use App\products\models\Product;
use App\favorites\models\Favorite;

class FavoriteService{
    public function addToFavorite($userId, $productId) {
        $product = Product::findOrFail($productId);        
        if (!$product) {
            return;
        }
        if($this->isProductInFavorites($userId,$productId))
        {
            return;
        }

        Favorite::create([
            "userId"=>$userId,
            "productId"=>$productId,
            
        ]);
   
    } 
    public function isProductInFavorites(int $userId, string $productId)
    {
    
        $favorite = Favorite::where('productId', $productId)->where('userId', $userId)->first();        
        if($favorite){
            return true;
        }
        return false;
    }
    public function removeFromFavorites($userId, $productId)
    {
        $product = Product::findOrFail($productId);
        if (!$product) {
            return;
        }
        if(!$this->isProductInFavorites($userId, $productId)){
            return;
        }
        Favorite::where('productId', $productId)->where('userId', $userId)->delete();

    }

}