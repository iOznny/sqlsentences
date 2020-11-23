<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::create([
            'key' => 'HyperX Cloud Stinger',
            'name' => 'HyperX Cloud Stinger',
            'description' => 'Audifonos Gaming',
            'price' => 944,
            'cuantity' => 30,
            'provider_id' => 1
        ]);

        $product = Product::create([
            'key' => 'HyperX Cloud II',
            'name' => 'HyperX Cloud II',
            'description' => 'Audifonos Gaming',
            'price' => 2064,
            'cuantity' => 50,
            'provider_id' => 1
        ]);

        $product = Product::create([
            'key' => 'HyperX Cloud Alpha S',
            'name' => 'HyperX Cloud Alpha S',
            'description' => 'Audifonos Gaming',
            'price' => 2655,
            'cuantity' => 40,
            'provider_id' => 1
        ]);

        $product = Product::create([
            'key' => 'HyperX QuadCast',
            'name' => 'HyperX QuadCast',
            'description' => 'Microfono Gaming',
            'price' => 2700,
            'cuantity' => 50,
            'provider_id' => 1
        ]);

        $product = Product::create([
            'key' => 'HyperX QuadCast S',
            'name' => 'HyperX QuadCast S',
            'description' => 'Microfono Gaming',
            'price' => 3400,
            'cuantity' => 100,
            'provider_id' => 1
        ]);

        $product = Product::create([
            'key' => 'HyperX Alloy Origins',
            'name' => 'HyperX Alloy Origins',
            'description' => 'Teclado Gaming',
            'price' => 2499,
            'cuantity' => 30,
            'provider_id' => 1
        ]);
        
        $product = Product::create([
            'key' => 'HyperX Alloy Core RGB',
            'name' => 'HyperX Alloy Core RGB',
            'description' => 'Teclado Gaming',
            'price' => 1900,
            'cuantity' => 20,
            'provider_id' => 1
        ]);

        $product = Product::create([
            'key' => 'HyperX Pulsefire Core RGB',
            'name' => 'HyperX Pulsefire Core RGB',
            'description' => 'Mouse Gaming',
            'price' => 700,
            'cuantity' => 80,
            'provider_id' => 1
        ]);

        $product = Product::create([
            'key' => 'HyperX Pulsefire Surge RGB',
            'name' => 'HyperX Pulsefire Surge RGB',
            'description' => 'Mouse Gaming',
            'price' => 1200,
            'cuantity' => 50,
            'provider_id' => 1
        ]);

        $product = Product::create([
            'key' => 'CC-9011098-WW',
            'name' => 'Chasis semitorre Crystal Series™ 570X RGB ATX',
            'description' => 'A través del cristal templado que rodea su chasis.',
            'price' => 3420,
            'cuantity' => 30,
            'provider_id' => 2 
        ]);

        $product = Product::create([
            'key' => 'CC-9011101-WW',
            'name' => 'Chasis semitorre compacto ATX Crystal Series™ 460X RGB',
            'description' => 'El diseño de la semitorre Crystal 460X es maravillosamente sencillo y ha sido pensado para ofrecer el máximo rendimiento.',
            'price' => 1757,
            'cuantity' => 20,
            'provider_id' => 2 
        ]);

        $product = Product::create([
            'key' => 'CF-9010031-WW',
            'name' => 'Silla para juegos T3 RUSH - Gris/carbón',
            'description' => 'La silla de juegos CORSAIR T3 RUSH combina un diseño inspirado en las carreras y una comodidad contorneada.',
            'price' => 5700,
            'cuantity' => 70,
            'provider_id' => 2
        ]);

        $product = Product::create([
            'key' => 'ASWORDFISH-250G-C',
            'name' => 'SSD Adata SWORDFISH 3D NAND, 250GB, PCI Express, M.2',
            'description' => 'Disco Duro SSD M.2',
            'price' => 719,
            'cuantity' => 275,
            'provider_id' => 3
        ]);
    }
}
