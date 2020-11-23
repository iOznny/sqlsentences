<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provider;


class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provider = Provider::create([
            'key' => 'HYX',
            'name' => 'Hyper X',
            'description' => 'HyperX es la división de productos de alto rendimiento de Kingston Technology, el fabricante de memorias independiente más grande del mundo.'
        ]);

        $provider = Provider::create([
            'key' => 'CORCOMPTNS',
            'name' => 'Corsair Components',
            'description' => 'Corsair Components, Inc. es una empresa estadounidense de hardware de computadoras y periféricos con sede en Fremont, California.'
        ]);

        $provider = Provider::create([
            'key' => 'ADATA',
            'name' => 'ADATA',
            'description' => 'ADATA Technology es una empresa taiwanesa fabricante de memorias, fundada en mayo de 2001 por Simón Chen. '
        ]);
    }
}
