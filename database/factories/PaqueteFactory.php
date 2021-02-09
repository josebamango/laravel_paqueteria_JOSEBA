<?php

namespace Database\Factories;

use App\Models\Paquete;
use App\Models\Transportista;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaqueteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paquete::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "transportista_id" => Transportista::all()->random()->id,
            "direccion" => $this->faker->address(),
            "entregado" => $this->faker->boolean(),
            "imagen" => 'assets/imagenes/paquetes/paquete_por_defecto.jpg',
        ];
    }
}
