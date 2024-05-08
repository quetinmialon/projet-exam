<?php

namespace Database\Seeders;
use App\auth\models\User;
use App\basket\command\infrastructure\models\PromoCodeModel;
use App\products\infrastructure\gateways\models\Product;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::Create([
            'name' => 'test',
            'email' => 'test@example.com',
            'admin' => false,
            'password' => 'password',
        ]);
        User::Create([
            'name' => 'Quentin',
            'email' => 'quentin@example.com',
            'admin' => true,
            'password' => 'password',
        ]);
;
        Product::Create([
            'id' => '1',
            'name' => 'test_product',
            'price' => 25,
            'description' => "this is a brieve description of this unexisting product",
            'img' => ''
        ]);
        Product::Create([
            'id' => '2',
            'name' => 'test_product2',
            'price' => 32,
            'description' => "this is also a brieve description of this unexisting product",
            'img' => ''
        ]);
        Product::Create([
            'id' => '3',
            'name' => 'produit de test',
            'price' => 85,
            'description' => "this is a brieve description of this unexisting product but imagine if it exists :O",
            'img' => ''
        ]);
        Product::Create([
            'id' => '4',
            'name' => 'produit de test numéro 4',
            'price' => 5,
            'description' => "this is a brieve description of this unexisting product but imagine if it exists, with this low price how to resist ?",
            'img' => ''
        ]);
        PromoCodeModel::Create(
            [
                'label'=>'promotion',
                'value'=>20,
                'type'=>'flat'
            ]
            );
        PromoCodeModel::Create(
            [
                'label'=>'promote',
                'value'=>24,
                'type'=>'percentage'
            ]
            );
    }
}
