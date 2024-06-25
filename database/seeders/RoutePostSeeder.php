<?php

namespace Database\Seeders;

use App\Models\RoutePost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoutePostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        RoutePost::factory()->create([
            'ascent_date' => '2024-06-25',
            'rating' => 5,
            'comment' => 'Lorem Ipsum Dolor Sit Amet',
            'user_id' => 1,
            'route_id' => 1

        ]);
    }
}
