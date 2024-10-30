<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $brand1 = Brand::create(['name' => 'Marca 1']);
        $brand2 = Brand::create(['name' => 'Marca 2']);
        $brand3 = Brand::create(['name' => 'Marca 3']);
        $brand4 = Brand::create(['name' => 'Marca 4']);
        $brand5 = Brand::create(['name' => 'Marca 5']);

        Product::create([
            'name' => 'Producto 1',
            'unit' => 'Unidad',
            'brand_id' => $brand1->id,
            'description' => 'Descripción del producto 1',
            'stock' => 10,
        ]);

        Product::create([
            'name' => 'Producto 2',
            'unit' => 'Unidad',
            'brand_id' => $brand2->id,
            'description' => 'Descripción del producto 2',
            'stock' => 20,
        ]);

        Product::create([
            'name' => 'Producto 3',
            'unit' => 'Unidad',
            'brand_id' => $brand3->id,
            'description' => 'Descripción del producto 3',
            'stock' => 30,
        ]);
        
        Product::create([
            'name' => 'Producto 4',
            'unit' => 'Unidad',
            'brand_id' => $brand4->id,
            'description' => 'Descripción del producto 4',
            'stock' => 40,
        ]);
        
        Product::create([
            'name' => 'Producto 5',
            'unit' => 'Unidad',
            'brand_id' => $brand5->id,
            'description' => 'Descripción del producto 5',
            'stock' => 50,
        ]);
    }
}