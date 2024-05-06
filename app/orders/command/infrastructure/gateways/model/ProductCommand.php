<?php

namespace App\orders\command\infrastructure\gateways\model;

use Illuminate\Database\Eloquent\Model;
class ProductCommand extends Model{

    protected $table = 'productCommand';

    protected $fillable = [
    'productId',
    'quantity',
    'orderId',
    ];
    
}