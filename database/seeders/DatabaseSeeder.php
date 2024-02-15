<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        
        $this->call([
            ProductoSeeder::class,
            CategoriaSeeder::class,
        ]);
        //Producto::factory(1)->create();
    }
}