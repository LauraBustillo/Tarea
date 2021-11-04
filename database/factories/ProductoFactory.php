<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{

    /**
    *The name of the factory's corresponding model.
    *
    * @var string
    */
   protected $model = Producto::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'descripcion'=> $this->faker-> text,
            'precio_venta' => $this->faker-> numberbetween(150 , 4000),
            'precio_compra' => $this->faker-> numberbetween(250, 6000)
            
        ];
    }
}
