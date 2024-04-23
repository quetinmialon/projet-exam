<?php

namespace App\products\infrastructure\gateways\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = [
        'id',
        'price',
        'description',
        'img',
        'name'

    ];

    public $incrementing = false;



    use HasFactory;
}
