<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Product::create([
                'name' => $faker->word,
                'detail' => $faker->paragraph,
                'image' => 'image' . ($i + 1) . '.jpg',
            ]);
        }
    }
}

