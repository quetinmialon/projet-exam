<?php

namespace App\orders\command\infrastructure\gateways\model;

use App\products\infrastructure\gateways\models\Product;
use Illuminate\Database\Eloquent\Model;
class ProductCommand extends Model{

    protected $table = 'productCommand';

    protected $fillable = [
    'productId',
    'quantity',
    'orderId',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}