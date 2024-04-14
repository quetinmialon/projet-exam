<?php

namespace Database\Seeders;
use App\auth\models\User;
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

        User::create([
            'name' => 'Quentin',
            'email' => 'quentin@example.com',
            'admin' => true,
            'password' => 'password'
        ]);
        Product::create([
            'id' => '1',
            'name' => 'test_product',
            'price' => 25,
            'description' => "this is a brieve description of this unexisting product",
            'img' => ''
        ]);
    }
}
