<?php

namespace App\orders\command\infrastructure\gateways\model;

use Illuminate\Database\Eloquent\Model;
class Order extends Model{

    protected $table = 'orders';

    protected $fillable = [
        'userId',
        'adress',
        'paymentMethod',
        'status',
        'totalPrice',
    ];

    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    public function productCommands()
    {
        return $this->hasMany(ProductCommand::class);
    }

    
}