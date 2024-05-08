<?php

namespace App\basket\command\infrastructure\models;
use Illuminate\Database\Eloquent\Model;

class PromoCodeModel extends Model{
    protected $table = 'promoCode';

    protected $fillable = [
        'label',
        'value',
        'type'
    ];

    protected $primaryKey = 'label';
    protected $keyType = 'string';
    public $incrementing = false;


}
