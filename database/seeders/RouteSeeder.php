<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Route::factory()->create(array('leaflet_id' => 484, 'name' => 'Bloque de prueba', 'type' => 'boulder', 'grade' => '7a+'));
    }
}
