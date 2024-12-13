<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Product::create([
        'name' => 'Earth Plush',
        'description' => 'A cute and cuddly plush of Earth that reminds you of our planets beauty.',
        'price' => 250000,
        'stock_quantity' => 50,
    ]);

    Product::create([
        'name' => 'Eco Lanyard',
        'description' => 'A stylish and eco-friendly lanyard to carry your keys, ID, or pass with pride.',
        'price' => 300000,
        'stock_quantity' => 70,
    ]);

    Product::create([
        'name' => 'Go Green T-Shirt',
        'description' => 'An eco-friendly t-shirt made from 100% organic cotton. Comfortable and stylish.',
        'price' => 50000,
        'stock_quantity' => 45,
    ]);
}



}
