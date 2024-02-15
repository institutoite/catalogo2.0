<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nombre" => $this->faker->name(),
            "stock"  => $this->faker->numberBetween(100, 10000),
            "precio"=> $this->faker->numberBetween(10, 100),
            "fvencimiento"=>$this->faker->date(),
            "foto"=>$this->faker->url ,
            "video"=>$this->faker->url ,
        ];
    }
}
