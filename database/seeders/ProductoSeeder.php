<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;
class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            "nombre" => "Disco Solido",
            "stock"  => 50,
            "precio"=>45.25,
            "fvencimiento"=>'2023-11-15',
            "foto"=>"discosolido.jpg",
            "video"=>"",
        ]);
        Producto::create([
            "nombre" => "Monitor",
            "stock"  => 120,
            "precio"=>645.25,
            "fvencimiento"=>'2023-11-15',
            "foto"=>"monitor.png",
            "video"=>"",
        ]);
        Producto::create([
            "nombre" => "Case",
            "stock"  => 450,
            "precio"=>560.40,
            "fvencimiento"=>'2023-11-15',
            "foto"=>"case.webp",
            "video"=>"",
        ]);
        Producto::create([
            "nombre" => "Portatil HP V2.0",
            "stock"  => 15,
            "precio"=>2456.5,
            "fvencimiento"=>'2023-11-15',
            "foto"=>"portatil.png",
            "video"=>"",
        ]);
        Producto::create([
            "nombre" => "Teléfono",
            "stock"  => 502,
            "precio"=>1258.5,
            "fvencimiento"=>'2023-11-15',
            "foto"=>"telefono.png",
            "video"=>"",
        ]);
        Producto::create([
            "nombre" => "Teclado",
            "stock"  => 500,
            "precio"=>1250.25,
            "fvencimiento"=>'2023-11-15',
            "foto"=>"teclado.webp",
            "video"=>"",
        ]);
    }
}


