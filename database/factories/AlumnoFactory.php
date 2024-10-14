<?php

namespace Database\Factories;

use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id'=>fake()->numberBetween(1,9).''.fake()->numerify('######'),
            'nombre'=> fake()->name(),
            'apellido'=> fake()->lastName(),
            'apellidom'=> fake()->lastName(),
            'sexo'=>fake()->randomElement(['M','F']),
            'email'=>fake()->email(),
            'carrera_id'=>Carrera::factory(),
        ];
    }
}
