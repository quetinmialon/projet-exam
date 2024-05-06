<?php

namespace App\orders\command\infrastructure\gateways\model;

use Illuminate\Database\Eloquent\Model;
class Order extends Model{

    protected $table = 'orders';

    protected $fillable = [
        'id',
        'userId',
        'adress',
        'paymentMethod',
        'status',
        'totalPrice',
    ];
    
}