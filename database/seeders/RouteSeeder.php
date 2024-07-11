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
        // Puntos Azules
        // Object { lat: 40.7528349, lng: -3.8986543, alt: 50 }
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'Skywalker', 'type' => 'boulder', 'grade' => '8a'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'Skywalker (sit)', 'type' => 'boulder', 'grade' => '8b'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'Placa de las Conchas', 'type' => 'boulder', 'grade' => '6c'));

        // Object { lat: 40.7605073, lng: -3.893166, alt: 50 }
        Route::factory()->create(array('lat' => 40.7605073, 'long' => -3.893166, 'name' => 'No te tires que ya llegas', 'type' => 'sport', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.7605073, 'long' => -3.893166, 'name' => 'Diagonal Úbeda', 'type' => 'sport', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.7605073, 'long' => -3.893166, 'name' => 'A por uvas', 'type' => 'sport', 'grade' => '6b'));

        Route::factory()->create(array('lat' => 40.75518511603, 'long' => -3.88565360306, 'name' => 'Espolón Peña Sirio', 'type' => 'trad,', 'grade' => '5'));
        Route::factory()->create(array('lat' => 40.75518511603, 'long' => -3.88565360306, 'name' => 'Maldita vecindad', 'type' => 'trad,', 'grade' => '6c+'));
        Route::factory()->create(array('lat' => 40.75518511603, 'long' => -3.88565360306, 'name' => 'Espolón Peña Sirio', 'type' => 'trad,', 'grade' => '5'));


    }
}
