<?php
namespace App\basket\query\work_application\services;
use App\auth\services\UsersService;
use App\basket\query\work_application\queries\GetBasketOfUser;

class QueryBasketServices{
    public function __construct(private GetBasketOfUser $getBasketOfUser){}

    public function getBasket(int $userId){
        $basket = $this->getBasketOfUser->execute($userId);
        $total = $this->getTotalPrice($basket['products']);
        $label = null;
        if($basket['promoCode']){
            $label = $basket['promoCode']['label'];
        }
        $totalWithDiscount = $this->totalWithDiscount($total,$basket['promoCode']);
        $discount = $total - $totalWithDiscount;
        return [
            'promoCode'=>$label,
            'products'=>$basket['products'],
            'remise'=>$discount,
            'total'=> $totalWithDiscount
        ];
    }

    private function totalWithDiscount(int $total, ?array $promoCode){
               
        if($promoCode){
            $discount = $promoCode['value'];
            if($promoCode['type']=='flat'){
                $total = $total - $discount;
                if($total<0){
                    $total = 0;
                }
                return $total;
            }
            return $total-($total*$discount/100);            
        }
        return $total;
    }






    private function getTotalPrice(array $products){
        $total = 0;
        foreach($products as $product){
            $total += $product['price']*$product['quantity'];
        }
        return $total;
    }



}