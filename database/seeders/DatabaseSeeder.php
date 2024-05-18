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
