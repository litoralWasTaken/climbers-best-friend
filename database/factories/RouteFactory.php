<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Route>
 */
class RouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'lat' => -3.89865430000,
            'long' => 40.75283490000,
            'name' => 'Bloque de prueba',
            'type' => 'boulder',
            'grade' => '7a+'
        ];
    }
}
