<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoutePost>
 */
class RoutePostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ascent_date' => '2024-06-25',
            'rating' => 5,
            'comment' => 'Lorem Ipsum Dolor Sit Amet',
            'user_id' => 1,
            'route_id' => 1
        ];
    }
}
