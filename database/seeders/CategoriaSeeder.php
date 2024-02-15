<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create(["categoria"=>"Mesas"]);
        Categoria::create(["categoria"=>"Escritorios"]);
        Categoria::create(["categoria"=>"Sillas"]);
        Categoria::create(["categoria"=>"Pupitres"]);
    }
}
