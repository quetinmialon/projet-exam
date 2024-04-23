<?php

namespace App\basket\command\infrastructure\models;
use Illuminate\Database\Eloquent\Model;

class BasketModel extends Model{
    protected $table = 'basket';

    protected $fillable = [
        'userId',
        'promoCodeLabel'
    ];

}
