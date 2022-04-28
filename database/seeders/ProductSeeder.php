<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Predio Comercial',
                'details' => 'Predio Comercial, 17 Andares, Vidro, Elevador',
                'description' => 'Ótimo prédio comercial de vidro, com 17 andares de altura, 1457 metros quadrados de área. Ótimo para escritórios e coworking',
                'brand' => 'Telsa',
                'price' => 256010,
                'shipping_cost' => 1500,
                'image_path' => 'storage/tiomothy-swope-zwe--GYIZtc-unsplash.jpg'
            ]
        ];

        foreach($products as $key => $value) {
            Product::create($value);
        }
    }
}
