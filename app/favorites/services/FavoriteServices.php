<?php
namespace App\favorites\services;

use App\products\models\Product;
use App\favorites\models\Favorite;

class FavoriteService{
    public function addToFavorite($userId,$productId){
        $product = Product::findorfail($productId);
        if(!$product){
            return;
        }
        
        $alreadyExist = Favorite::where('productId','=',$productId)->where('userId','=',$userId)->get();

        if($alreadyExist){
           return;
        }
        Favorite::create([
            "userId"=>$userId,
            "productId"=>$productId,
        ]);
   
    } 

}