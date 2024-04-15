<?php 

namespace App\basket\infrastructure\models;
use Illuminate\Database\Eloquent\Model;

class BasketModel extends Model{
    protected $table = 'basket';

    protected $fillable = [
        'userId',
        'promoCodeLabel'
    ];
    
}