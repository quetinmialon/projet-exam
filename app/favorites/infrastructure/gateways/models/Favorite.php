<?php

namespace App\favorites\infrastructure\gateways\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public $fillable = [
        'userId',
        'productId'
 ];



    use HasFactory;
}
