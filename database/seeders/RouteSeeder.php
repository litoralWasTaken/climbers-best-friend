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
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'El Filo', 'type' => 'boulder', 'grade' => '7a'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'Jeté Martín', 'type' => 'boulder', 'grade' => '7a+'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'La Vira', 'type' => 'boulder', 'grade' => '7a+'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'C02', 'type' => 'boulder', 'grade' => '7b+'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'El Bloque Chulo', 'type' => 'boulder', 'grade' => '7a'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'El Chincheta', 'type' => 'boulder', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'Seis Uñas', 'type' => 'boulder', 'grade' => '7a+'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'Regletones Talones', 'type' => 'boulder', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'Izben Gabea', 'type' => 'boulder', 'grade' => '7a'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'Placa Nin', 'type' => 'boulder', 'grade' => '6c+'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'La Peste', 'type' => 'boulder', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => '17 Puñaladas', 'type' => 'boulder', 'grade' => '7a+'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'Placa Armarana', 'type' => 'boulder', 'grade' => '7a+'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'El Muñeco de Trapo', 'type' => 'boulder', 'grade' => '7b'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'El Desplome Arenoso', 'type' => 'boulder', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'Carne Picada', 'type' => 'boulder', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'La Laja Roja', 'type' => 'boulder', 'grade' => '6a+'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'Momo', 'type' => 'boulder', 'grade' => '7b'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'Meetic', 'type' => 'boulder', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'Intravenosa', 'type' => 'boulder', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.7528349, 'long' => -3.8986543, 'name' => 'Pac-man', 'type' => 'boulder', 'grade' => '7a+'));


        // Bloque 1
        // Object { lat: 40.75276965, lng: -3.8967479, alt: 50 }
        Route::factory()->create(array('lat' => 40.75276965, 'long' => -3.8967479, 'name' => 'Placa sin Manos', 'type' => 'boulder', 'grade' => '3b'));
        Route::factory()->create(array('lat' => 40.75276965, 'long' => -3.8967479, 'name' => 'Buscando a Klem', 'type' => 'boulder', 'grade' => '7a+'));
        Route::factory()->create(array('lat' => 40.75276965, 'long' => -3.8967479, 'name' => 'La Huevera', 'type' => 'boulder', 'grade' => '6a'));

        //Bloque 2
        // Object { lat: 40.75282805, lng: -3.89679615, alt: 50 }
        Route::factory()->create(array('lat' => 40.75282805, 'long' => -3.89679615, 'name' => 'La Chincheta', 'type' => 'boulder', 'grade' => '6b'));

        // Bloque 3
        // Object { lat: 40.75279705929, lng: -3.89668796679, alt: 50 }
        Route::factory()->create(array('lat' => 40.75279705929, 'long' => -3.89668796679, 'name' => 'Musgoevash Izquierda', 'type' => 'boulder', 'grade' => '6c'));

        // Bloque 4
        // Object { lat: 40.7528460073, lng: -3.89673087333, alt: 50 }
        Route::factory()->create(array('lat' => 40.7528460073, 'long' => -3.89673087333, 'name' => 'Fisura', 'type' => 'boulder', 'grade' => '4c'));
        Route::factory()->create(array('lat' => 40.7528460073, 'long' => -3.89673087333, 'name' => 'La Placa del Filo', 'type' => 'boulder', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.7528460073, 'long' => -3.89673087333, 'name' => 'Trave Patinosa', 'type' => 'boulder', 'grade' => '6b'));

        // Bloque 10
        // Object { lat: 40.7529088, lng: -3.89653665, alt: 50 }
        Route::factory()->create(array('lat' => 40.7529088, 'long' => -3.89653665, 'name' => 'Bajada por el árbol', 'type' => 'boulder', 'grade' => '5a'));

        // Bloque 19
        // Object { lat: 40.75315563366, lng: -3.89602375788, alt: 50 }
        Route::factory()->create(array('lat' => 40.75315563366, 'long' => -3.89602375788, 'name' => 'Contorsionista', 'type' => 'boulder', 'grade' => '7a+'));

        // Bloque 20
        // Object { lat: 40.75322245, lng: -3.89592545, alt: 50 }
        Route::factory()->create(array('lat' => 40.75322245, 'long' => -3.89592545, 'name' => 'Muro Naranja', 'type' => 'boulder', 'grade' => '5a'));

        // Bosque de Cantocochino Este
        // Object { lat: 40.75244004243, lng: -3.8953802286, alt: 50 }
        Route::factory()->create(array('lat' => 40.75244004243, 'long' => -3.8953802286, 'name' => 'Cocidito madrileño', 'type' => 'boulder', 'grade' => '7b+'));
        Route::factory()->create(array('lat' => 40.75244004243, 'long' => -3.8953802286, 'name' => 'Travel Power', 'type' => 'boulder', 'grade' => '7a+'));
        Route::factory()->create(array('lat' => 40.75244004243, 'long' => -3.8953802286, 'name' => 'El Señor del Acero', 'type' => 'boulder', 'grade' => '7a'));
        Route::factory()->create(array('lat' => 40.75244004243, 'long' => -3.8953802286, 'name' => 'Broken Ass', 'type' => 'boulder', 'grade' => '7a'));
        Route::factory()->create(array('lat' => 40.75244004243, 'long' => -3.8953802286, 'name' => 'Chulitos Extension', 'type' => 'boulder', 'grade' => '7a+'));
        Route::factory()->create(array('lat' => 40.75244004243, 'long' => -3.8953802286, 'name' => 'El Resquemor', 'type' => 'boulder', 'grade' => '7a'));
        Route::factory()->create(array('lat' => 40.75244004243, 'long' => -3.8953802286, 'name' => 'Las Tres Gallinas', 'type' => 'boulder', 'grade' => '7a+'));


        // Pradera del Pancho Object { lat: 40.75342433097, lng: -3.89347040895, alt: 50 }
        Route::factory()->create(array('lat' => 40.75342433097, 'long' => -3.89347040895, 'name' => 'La Esquina', 'type' => 'boulder', 'grade' => '7a'));
        Route::factory()->create(array('lat' => 40.75342433097, 'long' => -3.89347040895, 'name' => 'Esquina de Árbol', 'type' => 'boulder', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.75342433097, 'long' => -3.89347040895, 'name' => 'One Hot Minute', 'type' => 'boulder', 'grade' => '7c'));
        Route::factory()->create(array('lat' => 40.75342433097, 'long' => -3.89347040895, 'name' => 'Cobra Gay', 'type' => 'boulder', 'grade' => '7b'));
        Route::factory()->create(array('lat' => 40.75342433097, 'long' => -3.89347040895, 'name' => 'Mayoría de Edad', 'type' => 'boulder', 'grade' => '7a'));
        Route::factory()->create(array('lat' => 40.75342433097, 'long' => -3.89347040895, 'name' => 'Vira Grande', 'type' => 'boulder', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.75342433097, 'long' => -3.89347040895, 'name' => 'El Tunante', 'type' => 'boulder', 'grade' => '6c+'));
        Route::factory()->create(array('lat' => 40.75342433097, 'long' => -3.89347040895, 'name' => 'Placa Rencorosa', 'type' => 'boulder', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.75342433097, 'long' => -3.89347040895, 'name' => 'Gases Lacrimógenos', 'type' => 'boulder', 'grade' => '7a'));
        Route::factory()->create(array('lat' => 40.75342433097, 'long' => -3.89347040895, 'name' => 'Placa de Pancho', 'type' => 'boulder', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.75342433097, 'long' => -3.89347040895, 'name' => 'Arroitatostegui', 'type' => 'boulder', 'grade' => '7c+'));
        Route::factory()->create(array('lat' => 40.75342433097, 'long' => -3.89347040895, 'name' => 'Infinita Valentia', 'type' => 'boulder', 'grade' => '7c+'));
        Route::factory()->create(array('lat' => 40.75342433097, 'long' => -3.89347040895, 'name' => 'La Placa Infinita ', 'type' => 'boulder', 'grade' => '7b'));
        Route::factory()->create(array('lat' => 40.75342433097, 'long' => -3.89347040895, 'name' => 'Fisunaranja', 'type' => 'boulder', 'grade' => '6c+'));
        Route::factory()->create(array('lat' => 40.75342433097, 'long' => -3.89347040895, 'name' => 'El Mayoral', 'type' => 'boulder', 'grade' => '7b'));
        Route::factory()->create(array('lat' => 40.75342433097, 'long' => -3.89347040895, 'name' => 'Cuarto y Mitad', 'type' => 'boulder', 'grade' => '7a'));
        Route::factory()->create(array('lat' => 40.75342433097, 'long' => -3.89347040895, 'name' => 'Soledades', 'type' => 'boulder', 'grade' => '7b+'));
        Route::factory()->create(array('lat' => 40.75342433097, 'long' => -3.89347040895, 'name' => 'You Pay!', 'type' => 'boulder', 'grade' => '6c'));

        // La Colina
        // Object { lat: 40.75440674269, lng: -3.89462103504, alt: 50 }
        Route::factory()->create(array('lat' => 40.75440674269, 'long' => -3.89462103504, 'name' => 'Arista Derecha', 'type' => 'boulder', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.75440674269, 'long' => -3.89462103504, 'name' => 'PLaca de las Aristas', 'type' => 'boulder', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.75440674269, 'long' => -3.89462103504, 'name' => 'El Sudokín', 'type' => 'boulder', 'grade' => '7a+'));

        // Cotillas
        // Object { lat: 40.75845943436, lng: -3.89898522408, alt: 50 }
        Route::factory()->create(array('lat' => 40.75845943436, 'long' => -3.89898522408, 'name' => 'Grayskull', 'type' => 'boulder', 'grade' => '7b+'));

        // Piñón
        // Object { lat: 40.7601193171, lng: -3.90013071279, alt: 50 }
        Route::factory()->create(array('lat' => 40.7601193171, 'long' => -3.90013071279, 'name' => 'El Tobogán', 'type' => 'boulder', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.7601193171, 'long' => -3.90013071279, 'name' => 'El Bigotes', 'type' => 'boulder', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.7601193171, 'long' => -3.90013071279, 'name' => 'Directo al Pozo', 'type' => 'boulder', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.7601193171, 'long' => -3.90013071279, 'name' => 'La Proa de Calentar', 'type' => 'boulder', 'grade' => '6a+'));
        Route::factory()->create(array('lat' => 40.7601193171, 'long' => -3.90013071279, 'name' => 'Nelson Mantela', 'type' => 'boulder', 'grade' => '7a'));
        Route::factory()->create(array('lat' => 40.7601193171, 'long' => -3.90013071279, 'name' => 'El Mostacho', 'type' => 'boulder', 'grade' => '7a'));


        // El Dante
        // Object { lat: 40.76019787327, lng: -3.89408398229, alt: 50 }
        Route::factory()->create(array('lat' => 40.76019787327, 'long' => -3.89408398229, 'name' => 'Quítame la vida antes que la comida', 'type' => 'sport', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.76019787327, 'long' => -3.89408398229, 'name' => 'Survival Mouse', 'type' => 'sport', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.76019787327, 'long' => -3.89408398229, 'name' => 'Urk-urk', 'type' => 'trad', 'grade' => '6c+'));
        Route::factory()->create(array('lat' => 40.76019787327, 'long' => -3.89408398229, 'name' => 'La tentación vive arriba', 'type' => 'sport', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.76019787327, 'long' => -3.89408398229, 'name' => 'Santa Claus', 'type' => 'sport', 'grade' => '7b'));
        Route::factory()->create(array('lat' => 40.76019787327, 'long' => -3.89408398229, 'name' => 'La súper abuela', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.76019787327, 'long' => -3.89408398229, 'name' => 'Por los cuernos de Belcebú', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.76019787327, 'long' => -3.89408398229, 'name' => 'POr los clavos de Cristo', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.76019787327, 'long' => -3.89408398229, 'name' => 'El culo del mundo', 'type' => 'sport', 'grade' => '6a+'));
        Route::factory()->create(array('lat' => 40.76019787327, 'long' => -3.89408398229, 'name' => 'La mirinda asesina', 'type' => 'sport', 'grade' => '7b+'));
        Route::factory()->create(array('lat' => 40.76019787327, 'long' => -3.89408398229, 'name' => 'Los profesionales', 'type' => 'sport', 'grade' => '6a+'));
        Route::factory()->create(array('lat' => 40.76019787327, 'long' => -3.89408398229, 'name' => 'Hasta el rabo todo es toro', 'type' => 'sport', 'grade' => '8b'));
        Route::factory()->create(array('lat' => 40.76019787327, 'long' => -3.89408398229, 'name' => 'Ni un paso atrás', 'type' => 'sport', 'grade' => '6c+'));

        // Lencería
        // Object { lat: 40.76047392096, lng: -3.89324820543, alt: 50 }
        Route::factory()->create(array('lat' => 40.76047392096, 'long' => -3.89324820543, 'name' => 'Sector lencería', 'type' => 'trad', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.76047392096, 'long' => -3.89324820543, 'name' => 'La seta solitaria', 'type' => 'trad', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.76047392096, 'long' => -3.89324820543, 'name' => 'Iniciación a la escalada limpia', 'type' => 'trad', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.76047392096, 'long' => -3.89324820543, 'name' => 'Los lunes libro', 'type' => 'sport', 'grade' => '5'));
        Route::factory()->create(array('lat' => 40.76047392096, 'long' => -3.89324820543, 'name' => 'Que malas sois con nosotros', 'type' => 'sport', 'grade' => '6a+'));
        Route::factory()->create(array('lat' => 40.76047392096, 'long' => -3.89324820543, 'name' => 'El tiempo transcurrido', 'type' => 'sport', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.76047392096, 'long' => -3.89324820543, 'name' => 'Zumo de neón', 'type' => 'sport', 'grade' => '6a'));


        //         Pared Principal
        // Object { lat: 40.76049789604, lng: -3.89292365679, alt: 50 }
        Route::factory()->create(array('lat' => 40.76049789604, 'long' => -3.89292365679, 'name' => 'Sur clásica', 'type' => 'trad', 'grade' => '4'));
        Route::factory()->create(array('lat' => 40.76049789604, 'long' => -3.89292365679, 'name' => 'Chimenea sur', 'type' => 'trad', 'grade' => '3+'));
        Route::factory()->create(array('lat' => 40.76049789604, 'long' => -3.89292365679, 'name' => 'Delicia francesa', 'type' => 'trad', 'grade' => '5b+'));
        Route::factory()->create(array('lat' => 40.76049789604, 'long' => -3.89292365679, 'name' => 'Valen', 'type' => 'trad', 'grade' => '4'));
        Route::factory()->create(array('lat' => 40.76049789604, 'long' => -3.89292365679, 'name' => 'Tinto de verano', 'type' => 'sport', 'grade' => '3'));
        Route::factory()->create(array('lat' => 40.76049789604, 'long' => -3.89292365679, 'name' => 'Techo de Peña Blanca', 'type' => 'sport', 'grade' => '7b+/c'));
        Route::factory()->create(array('lat' => 40.76049789604, 'long' => -3.89292365679, 'name' => 'Vaya cachas pa mi hacha', 'type' => 'sport', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.76049789604, 'long' => -3.89292365679, 'name' => 'Variante Vaya cachas pa mi hacha', 'type' => 'sport', 'grade' => '6b+'));


        //         Callejón
        // Object { lat: 40.7605073, lng: -3.893166, alt: 50 }
        Route::factory()->create(array('lat' => 40.7605073, 'long' => -3.893166, 'name' => 'No te tires que ya llegas', 'type' => 'sport', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.7605073, 'long' => -3.893166, 'name' => 'Diagonal Úbeda', 'type' => 'sport', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.7605073, 'long' => -3.893166, 'name' => 'A por uvas', 'type' => 'sport', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.7605073, 'long' => -3.893166, 'name' => 'Laura', 'type' => 'sport', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.7605073, 'long' => -3.893166, 'name' => 'S/N', 'type' => 'sport', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.7605073, 'long' => -3.893166, 'name' => 'S/N', 'type' => 'sport', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.7605073, 'long' => -3.893166, 'name' => 'Días de mosqueo', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.7605073, 'long' => -3.893166, 'name' => 'S/N', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.7605073, 'long' => -3.893166, 'name' => 'La danza de los rasguños', 'type' => 'sport', 'grade' => '6b+'));


        //         Cara Noroeste
        // Object { lat: 40.76063275, lng: -3.89294605, alt: 50 }
        Route::factory()->create(array('lat' => 40.76063275, 'long' => -3.89294605, 'name' => 'Norte', 'type' => 'trad', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.76063275, 'long' => -3.89294605, 'name' => 'Norte (Variante Pedro Gómez)', 'type' => 'trad', 'grade' => '5'));
        Route::factory()->create(array('lat' => 40.76063275, 'long' => -3.89294605, 'name' => 'Menos chapas y más chalés', 'type' => 'sport', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.76063275, 'long' => -3.89294605, 'name' => 'Salamandra', 'type' => 'sport', 'grade' => '7b'));


        //         Contrafuerte Inferior
        // Object { lat: 40.76011310565, lng: -3.89305031422, alt: 50 }
        Route::factory()->create(array('lat' => 40.76011310565, 'long' => -3.89305031422, 'name' => 'Nasío pa matar', 'type' => 'trad', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.76011310565, 'long' => -3.89305031422, 'name' => 'El anillo de los nibelungos (variante)', 'type' => 'sport', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.76011310565, 'long' => -3.89305031422, 'name' => 'El anillo de los nibelungos', 'type' => 'sport', 'grade' => '6c+'));

        // Pared Desplomada
        // Object { lat: 40.76070675945, lng: -3.893177945, alt: 50 }
        Route::factory()->create(array('lat' => 40.76070675945, 'long' => -3.893177945, 'name' => 'Pepín viaja a Pinto', 'type' => 'sport', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.76070675945, 'long' => -3.893177945, 'name' => 'Pat Parkinson', 'type' => 'sport', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.76070675945, 'long' => -3.893177945, 'name' => 'Hasta el final nadie es dichoso', 'type' => 'sport', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.76070675945, 'long' => -3.893177945, 'name' => 'Toma chepa', 'type' => 'sport', 'grade' => '7a+'));

        // La Nuez
        // Object { lat: 40.76068482536, lng: -3.89342004397, alt: 50 }
        Route::factory()->create(array('lat' => 40.76068482536, 'long' => -3.89342004397, 'name' => 'S/N 1', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.76068482536, 'long' => -3.89342004397, 'name' => 'La galana', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.76068482536, 'long' => -3.89342004397, 'name' => 'Sector farolillas', 'type' => 'sport', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.76068482536, 'long' => -3.89342004397, 'name' => 'Bienvenido a la tierra del olvido', 'type' => 'sport', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.76068482536, 'long' => -3.89342004397, 'name' => 'Four to France', 'type' => 'sport', 'grade' => '6c+'));
        Route::factory()->create(array('lat' => 40.76068482536, 'long' => -3.89342004397, 'name' => 'El superabuelo las coge al vuelo', 'type' => 'sport', 'grade' => '6b+'));


        // Tora Bora
        // Object { lat: 40.7586511, lng: -3.89072835, alt: 50 }
        Route::factory()->create(array('lat' => 40.7586511, 'long' => -3.89072835, 'name' => 'Brujería en la Arista', 'type' => 'boulder', 'grade' => '7A+'));
        Route::factory()->create(array('lat' => 40.7586511, 'long' => -3.89072835, 'name' => 'La Milf', 'type' => 'boulder', 'grade' => '6C+'));
        Route::factory()->create(array('lat' => 40.7586511, 'long' => -3.89072835, 'name' => 'Arizona Lady', 'type' => 'boulder', 'grade' => '7A'));
        Route::factory()->create(array('lat' => 40.7586511, 'long' => -3.89072835, 'name' => 'La Chica Arriba', 'type' => 'boulder', 'grade' => '6B+'));
        Route::factory()->create(array('lat' => 40.7586511, 'long' => -3.89072835, 'name' => 'Superunknown', 'type' => 'boulder', 'grade' => '7B+'));
        Route::factory()->create(array('lat' => 40.7586511, 'long' => -3.89072835, 'name' => 'Waikiki', 'type' => 'boulder', 'grade' => '6B'));
        Route::factory()->create(array('lat' => 40.7586511, 'long' => -3.89072835, 'name' => 'Bayou Country', 'type' => 'boulder', 'grade' => '7A'));
        Route::factory()->create(array('lat' => 40.7586511, 'long' => -3.89072835, 'name' => 'Zodiac', 'type' => 'boulder', 'grade' => '7A+'));
        Route::factory()->create(array('lat' => 40.7586511, 'long' => -3.89072835, 'name' => 'Acciones Legales', 'type' => 'boulder', 'grade' => '7A'));
        Route::factory()->create(array('lat' => 40.7586511, 'long' => -3.89072835, 'name' => 'El Nicho', 'type' => 'boulder', 'grade' => '5A'));
        Route::factory()->create(array('lat' => 40.7586511, 'long' => -3.89072835, 'name' => 'Non Returnable', 'type' => 'boulder', 'grade' => '5C'));
        Route::factory()->create(array('lat' => 40.7586511, 'long' => -3.89072835, 'name' => 'Mágico Santos', 'type' => 'boulder', 'grade' => '6C'));
        Route::factory()->create(array('lat' => 40.7586511, 'long' => -3.89072835, 'name' => 'Las Trampas de Gon', 'type' => 'boulder', 'grade' => '6B+'));
        Route::factory()->create(array('lat' => 40.7586511, 'long' => -3.89072835, 'name' => 'Zapatillas Gemelas', 'type' => 'boulder', 'grade' => '4A'));
        Route::factory()->create(array('lat' => 40.7586511, 'long' => -3.89072835, 'name' => 'Por Ahí', 'type' => 'boulder', 'grade' => '5B'));

        // Tora Bora (cuerda)
        // Object { lat: 40.75832189772, lng: -3.89121891097, alt: 50 }
        Route::factory()->create(array('lat' => 40.75832189772, 'long' => -3.89121891097, 'name' => 'El mejor bateador', 'type' => 'sport', 'grade' => '7a'));
        Route::factory()->create(array('lat' => 40.75832189772, 'long' => -3.89121891097, 'name' => 'Los hermanos malasombra', 'type' => 'sport', 'grade' => '8b'));
        Route::factory()->create(array('lat' => 40.75832189772, 'long' => -3.89121891097, 'name' => 'Match Point', 'type' => 'sport', 'grade' => '8a'));
        Route::factory()->create(array('lat' => 40.75832189772, 'long' => -3.89121891097, 'name' => 'Moffy', 'type' => 'sport', 'grade' => '7a+'));
        Route::factory()->create(array('lat' => 40.75832189772, 'long' => -3.89121891097, 'name' => 'En <S> sentido', 'type' => 'sport', 'grade' => '7c'));
        Route::factory()->create(array('lat' => 40.75832189772, 'long' => -3.89121891097, 'name' => 'Huemul capullo', 'type' => 'sport', 'grade' => '7b'));
        Route::factory()->create(array('lat' => 40.75832189772, 'long' => -3.89121891097, 'name' => 'La indiferente', 'type' => 'trad', 'grade' => '6b+'));

        // El Rocódromo
        // Object { lat: 40.75974913304, lng: -3.88497145576, alt: 50 }

        Route::factory()->create(array('lat' => 40.75974913304, 'long' => -3.88497145576, 'name' => 'Toñín', 'type' => 'trad', 'grade' => '7b'));
        Route::factory()->create(array('lat' => 40.75974913304, 'long' => -3.88497145576, 'name' => 'Corazón de hierro', 'type' => 'sport', 'grade' => '7b+'));
        Route::factory()->create(array('lat' => 40.75974913304, 'long' => -3.88497145576, 'name' => 'El nervio (Canción de cuna para un bufón)', 'type' => 'sport', 'grade' => '7b'));
        Route::factory()->create(array('lat' => 40.75974913304, 'long' => -3.88497145576, 'name' => 'Thor', 'type' => 'sport', 'grade' => '7c+'));
        Route::factory()->create(array('lat' => 40.75974913304, 'long' => -3.88497145576, 'name' => 'La verruga (Una estaca por butaca)', 'type' => 'sport', 'grade' => '6c+'));
        Route::factory()->create(array('lat' => 40.75974913304, 'long' => -3.88497145576, 'name' => 'Evolución', 'type' => 'sport', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.75974913304, 'long' => -3.88497145576, 'name' => 'Milímetro', 'type' => 'sport', 'grade' => '6b'));


        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Mercurio', 'type' => 'sport', 'grade' => '6a+'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Venus', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Tierra', 'type' => 'sport', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Marte', 'type' => 'sport', 'grade' => '5'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Júpiter', 'type' => 'sport', 'grade' => '5'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Guminola', 'type' => 'sport', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Zorreva', 'type' => 'sport', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Dúo Torrebruno', 'type' => 'sport', 'grade' => '6c+'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Zodriana', 'type' => 'sport', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Donante de placer', 'type' => 'sport', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Placae vulpium', 'type' => 'sport', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Zorrelia', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Feel the metal', 'type' => 'sport', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Zorrerta', 'type' => 'sport', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Hijo de larva', 'type' => 'sport', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Colza suprema', 'type' => 'trad', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Jacobo', 'type' => 'trad', 'grade' => '5'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'John Silver', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Zarajos in the gym', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Mordor', 'type' => 'trad', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Quinto menguante', 'type' => 'trad', 'grade' => '6a+'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'Paciencia infinita', 'type' => 'sport', 'grade' => '7a+'));
        Route::factory()->create(array('lat' => 40.75727096629, 'long' => -3.88113858175, 'name' => 'La noche más larga', 'type' => 'trad', 'grade' => '6a'));

        Route::factory()->create(array('lat' => 40.75669171148, 'long' => -3.88244239215, 'name' => 'Rosario', 'type' => 'sport', 'grade' => '4+'));
        Route::factory()->create(array('lat' => 40.75669171148, 'long' => -3.88244239215, 'name' => 'Jabato', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.75669171148, 'long' => -3.88244239215, 'name' => 'Velétez', 'type' => 'sport', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.75669171148, 'long' => -3.88244239215, 'name' => 'A La Pedriza con una driza', 'type' => 'sport', 'grade' => '6c+'));
        Route::factory()->create(array('lat' => 40.75669171148, 'long' => -3.88244239215, 'name' => 'Algo eterno', 'type' => 'sport', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.75669171148, 'long' => -3.88244239215, 'name' => 'Mamba verde', 'type' => 'sport', 'grade' => '7a'));
        Route::factory()->create(array('lat' => 40.75669171148, 'long' => -3.88244239215, 'name' => 'Rock suave', 'type' => 'sport', 'grade' => '5'));
        Route::factory()->create(array('lat' => 40.75669171148, 'long' => -3.88244239215, 'name' => 'Sambhur', 'type' => 'sport', 'grade' => '5'));
        Route::factory()->create(array('lat' => 40.75669171148, 'long' => -3.88244239215, 'name' => 'Ópera prima', 'type' => 'sport', 'grade' => '5'));
        Route::factory()->create(array('lat' => 40.75669171148, 'long' => -3.88244239215, 'name' => 'Volar es vacuna', 'type' => 'trad', 'grade' => '5'));
        Route::factory()->create(array('lat' => 40.75669171148, 'long' => -3.88244239215, 'name' => 'S/N 1', 'type' => 'sport', 'grade' => '6a+'));
        Route::factory()->create(array('lat' => 40.75669171148, 'long' => -3.88244239215, 'name' => 'Benedé', 'type' => 'sport', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.75669171148, 'long' => -3.88244239215, 'name' => 'Rúcula León', 'type' => 'sport', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.75669171148, 'long' => -3.88244239215, 'name' => 'Sara', 'type' => 'sport', 'grade' => '7a'));
        Route::factory()->create(array('lat' => 40.75669171148, 'long' => -3.88244239215, 'name' => 'Mal de ojo', 'type' => 'sport', 'grade' => '7a+'));
        Route::factory()->create(array('lat' => 40.75669171148, 'long' => -3.88244239215, 'name' => 'Luis y Boti', 'type' => 'trad', 'grade' => '7b'));


        Route::factory()->create(array('lat' => 40.75620164423, 'long' => -3.88360166724, 'name' => 'Espolón', 'type' => 'sport', 'grade' => '4+'));
        Route::factory()->create(array('lat' => 40.75620164423, 'long' => -3.88360166724, 'name' => 'Canalizo', 'type' => 'sport', 'grade' => '4'));
        Route::factory()->create(array('lat' => 40.75620164423, 'long' => -3.88360166724, 'name' => 'Narci I', 'type' => 'sport', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.75620164423, 'long' => -3.88360166724, 'name' => 'Narci II', 'type' => 'sport', 'grade' => '5'));
        Route::factory()->create(array('lat' => 40.75620164423, 'long' => -3.88360166724, 'name' => 'Autopista del amor', 'type' => 'sport', 'grade' => '6a+'));
        Route::factory()->create(array('lat' => 40.75620164423, 'long' => -3.88360166724, 'name' => 'Dale caña al mono', 'type' => 'sport', 'grade' => '6a+'));
        Route::factory()->create(array('lat' => 40.75620164423, 'long' => -3.88360166724, 'name' => 'Crisis de personalidad', 'type' => 'sport', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.75620164423, 'long' => -3.88360166724, 'name' => 'Crisis de personalidad (Variante excitante)', 'type' => 'sport', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.75620164423, 'long' => -3.88360166724, 'name' => 'Un no por respuesta', 'type' => 'trad', 'grade' => '5'));
        Route::factory()->create(array('lat' => 40.75620164423, 'long' => -3.88360166724, 'name' => 'Lagartijilla', 'type' => 'sport', 'grade' => '4+'));


        Route::factory()->create(array('lat' => 40.7560952996, 'long' => -3.88716108177, 'name' => 'Stress donde estés', 'type' => 'sport', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.7560952996, 'long' => -3.88716108177, 'name' => 'Cornucopiòn', 'type' => 'sport', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.7560952996, 'long' => -3.88716108177, 'name' => 'Californicación', 'type' => 'sport', 'grade' => '6c+'));
        Route::factory()->create(array('lat' => 40.7560952996, 'long' => -3.88716108177, 'name' => 'El paradise', 'type' => 'sport', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.7560952996, 'long' => -3.88716108177, 'name' => 'Antigua', 'type' => 'sport', 'grade' => '6a+'));
        Route::factory()->create(array('lat' => 40.7560952996, 'long' => -3.88716108177, 'name' => 'Roccomitico', 'type' => 'sport', 'grade' => '6a+'));
        Route::factory()->create(array('lat' => 40.7560952996, 'long' => -3.88716108177, 'name' => 'La noche del impavido', 'type' => 'sport', 'grade' => '6c+'));
        Route::factory()->create(array('lat' => 40.7560952996, 'long' => -3.88716108177, 'name' => 'Piel de cobra', 'type' => 'sport', 'grade' => '7a'));
        Route::factory()->create(array('lat' => 40.7560952996, 'long' => -3.88716108177, 'name' => 'Duro rock', 'type' => 'sport', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.7560952996, 'long' => -3.88716108177, 'name' => 'Porno chacha free', 'type' => 'sport', 'grade' => '6a+'));
        Route::factory()->create(array('lat' => 40.7560952996, 'long' => -3.88716108177, 'name' => 'COE13', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.7560952996, 'long' => -3.88716108177, 'name' => 'El regajo', 'type' => 'sport', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.7560952996, 'long' => -3.88716108177, 'name' => 'Onicomicosis', 'type' => 'sport', 'grade' => '6c+'));
        Route::factory()->create(array('lat' => 40.7560952996, 'long' => -3.88716108177, 'name' => 'RElucia', 'type' => 'sport', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.7560952996, 'long' => -3.88716108177, 'name' => 'Megadura', 'type' => 'sport', 'grade' => '6c+'));


        Route::factory()->create(array('lat' => 40.75583383333, 'long' => -3.88682094918, 'name' => 'Alexia de galaxia', 'type' => 'sport', 'grade' => '7c+'));
        Route::factory()->create(array('lat' => 40.75583383333, 'long' => -3.88682094918, 'name' => 'Mater misericordia', 'type' => 'sport', 'grade' => '7c+'));
        Route::factory()->create(array('lat' => 40.75583383333, 'long' => -3.88682094918, 'name' => 'La grande Babylón', 'type' => 'sport', 'grade' => '7b'));
        Route::factory()->create(array('lat' => 40.75583383333, 'long' => -3.88682094918, 'name' => 'Fuego manchego', 'type' => 'sport', 'grade' => '6c+'));
        Route::factory()->create(array('lat' => 40.75583383333, 'long' => -3.88682094918, 'name' => 'Diedro re-gala-do', 'type' => 'sport', 'grade' => '7b'));
        Route::factory()->create(array('lat' => 40.75583383333, 'long' => -3.88682094918, 'name' => 'El parquecillo del León', 'type' => 'sport', 'grade' => '7a+'));
        Route::factory()->create(array('lat' => 40.75583383333, 'long' => -3.88682094918, 'name' => 'Odisea 2001', 'type' => 'sport', 'grade' => '7b+'));
        Route::factory()->create(array('lat' => 40.75583383333, 'long' => -3.88682094918, 'name' => 'Culirrubio caganidos', 'type' => 'sport', 'grade' => '7b'));
        Route::factory()->create(array('lat' => 40.75583383333, 'long' => -3.88682094918, 'name' => 'Inuit', 'type' => 'sport', 'grade' => '8b+'));
        Route::factory()->create(array('lat' => 40.75583383333, 'long' => -3.88682094918, 'name' => 'El último superviviente', 'type' => 'trad', 'grade' => '7b'));
        Route::factory()->create(array('lat' => 40.75583383333, 'long' => -3.88682094918, 'name' => 'Kan Kongo', 'type' => 'sport', 'grade' => '8a'));
        Route::factory()->create(array('lat' => 40.75583383333, 'long' => -3.88682094918, 'name' => 'Peláez de yemas', 'type' => 'sport', 'grade' => '8a'));
        Route::factory()->create(array('lat' => 40.75583383333, 'long' => -3.88682094918, 'name' => 'El descaderao', 'type' => 'sport', 'grade' => '7b'));
        Route::factory()->create(array('lat' => 40.75583383333, 'long' => -3.88682094918, 'name' => 'Eclipse de luna', 'type' => 'sport', 'grade' => '6c+'));
        Route::factory()->create(array('lat' => 40.75583383333, 'long' => -3.88682094918, 'name' => 'Vickie el vikingo', 'type' => 'sport', 'grade' => '8a+'));
        Route::factory()->create(array('lat' => 40.75583383333, 'long' => -3.88682094918, 'name' => 'El día del tonto', 'type' => 'sport', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.75583383333, 'long' => -3.88682094918, 'name' => 'Ni pa los pies ni pa las manos', 'type' => 'sport', 'grade' => '7a'));
        Route::factory()->create(array('lat' => 40.75583383333, 'long' => -3.88682094918, 'name' => 'Juan sin miedo', 'type' => 'sport', 'grade' => '7a+'));

        Route::factory()->create(array('lat' => 40.75518512935, 'long' => -3.88559546787, 'name' => 'Regreso al Futuro', 'type' => 'boulder', 'grade' => '7A+'));
        Route::factory()->create(array('lat' => 40.75518512935, 'long' => -3.88559546787, 'name' => 'Techo de Palan', 'type' => 'boulder', 'grade' => '7C+'));
        Route::factory()->create(array('lat' => 40.75518512935, 'long' => -3.88559546787, 'name' => 'Dramas y Comedias', 'type' => 'boulder', 'grade' => '8B+'));
        Route::factory()->create(array('lat' => 40.75518512935, 'long' => -3.88559546787, 'name' => 'Stone Monkey', 'type' => 'boulder', 'grade' => '7B+'));
        Route::factory()->create(array('lat' => 40.75518512935, 'long' => -3.88559546787, 'name' => 'El Inquilino', 'type' => 'boulder', 'grade' => '7B'));

        Route::factory()->create(array('lat' => 40.75518511603, 'long' => -3.88565360306, 'name' => 'Espolón Peña Sirio', 'type' => 'trad,', 'grade' => '5'));
        Route::factory()->create(array('lat' => 40.75518511603, 'long' => -3.88565360306, 'name' => 'Maldita vecindad', 'type' => 'trad,', 'grade' => '6c+'));


        Route::factory()->create(array('lat' => 40.75346984414, 'long' => -3.8867378248, 'name' => 'Let the music play', 'type' => 'sport', 'grade' => '7a'));
        Route::factory()->create(array('lat' => 40.75346984414, 'long' => -3.8867378248, 'name' => 'La menteuse', 'type' => 'sport', 'grade' => '7a+'));
        Route::factory()->create(array('lat' => 40.75346984414, 'long' => -3.8867378248, 'name' => 'La rapide de la petite culotte / Floja de bragas y recuerdos', 'type' => 'sport', 'grade' => '8b'));
        Route::factory()->create(array('lat' => 40.75346984414, 'long' => -3.8867378248, 'name' => 'Barry White 7a', 'type' => 'sport', 'grade' => 'A4+'));
        Route::factory()->create(array('lat' => 40.75346984414, 'long' => -3.8867378248, 'name' => 'Stainless 0,5 mm', 'type' => 'sport', 'grade' => 'A4'));

        Route::factory()->create(array('lat' => 40.75257880924, 'long' => -3.88593595065, 'name' => 'Tres buitres garrapiñaos', 'type' => 'sport', 'grade' => '5'));
        Route::factory()->create(array('lat' => 40.75257880924, 'long' => -3.88593595065, 'name' => 'Butterfingers', 'type' => 'sport', 'grade' => '7a+'));
        Route::factory()->create(array('lat' => 40.75257880924, 'long' => -3.88593595065, 'name' => 'Ferrodedos', 'type' => 'sport', 'grade' => '7a+'));
        Route::factory()->create(array('lat' => 40.75257880924, 'long' => -3.88593595065, 'name' => 'Me patrocina Durex', 'type' => 'sport', 'grade' => '5'));
        Route::factory()->create(array('lat' => 40.75257880924, 'long' => -3.88593595065, 'name' => 'El chucho la Charo 8a', 'type' => 'trad', 'grade' => 'A0'));
        Route::factory()->create(array('lat' => 40.75257880924, 'long' => -3.88593595065, 'name' => 'Cat Stevens', 'type' => 'sport', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.75257880924, 'long' => -3.88593595065, 'name' => 'Importanciosidad', 'type' => 'sport', 'grade' => '5'));
        Route::factory()->create(array('lat' => 40.75257880924, 'long' => -3.88593595065, 'name' => 'Zapatitos 1- Marianico 0', 'type' => 'sport', 'grade' => '4+'));


        Route::factory()->create(array('lat' => 40.75181577467, 'long' => -3.88556374651, 'name' => 'Ruta Quetzal', 'type' => 'trad', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.75181577467, 'long' => -3.88556374651, 'name' => 'Mis amigas no me dejan poner nombres guarros', 'type' => 'sport', 'grade' => '6a+'));
        Route::factory()->create(array('lat' => 40.75181577467, 'long' => -3.88556374651, 'name' => 'Por culpa de la novia', 'type' => 'sport', 'grade' => '6a+'));
        Route::factory()->create(array('lat' => 40.75181577467, 'long' => -3.88556374651, 'name' => 'Batucada', 'type' => 'sport', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.75181577467, 'long' => -3.88556374651, 'name' => 'Histerismo Ecològico', 'type' => 'sport', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.75181577467, 'long' => -3.88556374651, 'name' => 'Por tol Musgay', 'type' => 'sport', 'grade' => '4+'));
        Route::factory()->create(array('lat' => 40.75181577467, 'long' => -3.88556374651, 'name' => 'Reunión Descompuesta', 'type' => 'sport', 'grade' => '4+'));
        Route::factory()->create(array('lat' => 40.75181577467, 'long' => -3.88556374651, 'name' => 'Chicho', 'type' => 'sport', 'grade' => '4'));
        Route::factory()->create(array('lat' => 40.75181577467, 'long' => -3.88556374651, 'name' => 'Señores pedriceros', 'type' => 'sport', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.75181577467, 'long' => -3.88556374651, 'name' => '15000 escaladores egoistas', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.75181577467, 'long' => -3.88556374651, 'name' => 'Filón', 'type' => 'sport', 'grade' => '4+'));
        Route::factory()->create(array('lat' => 40.75181577467, 'long' => -3.88556374651, 'name' => 'Cuestolandia', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.75181577467, 'long' => -3.88556374651, 'name' => 'La niña incordio', 'type' => 'sport', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.75181577467, 'long' => -3.88556374651, 'name' => 'Editorial Aguado', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.75181577467, 'long' => -3.88556374651, 'name' => 'Phoenix', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.75181577467, 'long' => -3.88556374651, 'name' => 'Pepi', 'type' => 'sport', 'grade' => '6b'));

        Route::factory()->create(array('lat' => 40.75165873763, 'long' => -3.88518685875, 'name' => 'La lolita', 'type' => 'sport', 'grade' => '6a+'));
        Route::factory()->create(array('lat' => 40.75165873763, 'long' => -3.88518685875, 'name' => 'Esos hijos de puta...', 'type' => 'sport', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.75165873763, 'long' => -3.88518685875, 'name' => '...que nos robaron los', 'type' => '6a+', 'grade' => 'sacos'));
        Route::factory()->create(array('lat' => 40.75165873763, 'long' => -3.88518685875, 'name' => 'Me mola tu pistola', 'type' => 'sport', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.75165873763, 'long' => -3.88518685875, 'name' => 'Peppa onsight', 'type' => 'sport', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.75165873763, 'long' => -3.88518685875, 'name' => 'Jadea por talea', 'type' => 'sport', 'grade' => '7a+'));
        Route::factory()->create(array('lat' => 40.75165873763, 'long' => -3.88518685875, 'name' => 'Sepulman', 'type' => 'sport', 'grade' => '7a'));
        Route::factory()->create(array('lat' => 40.75165873763, 'long' => -3.88518685875, 'name' => 'La faja mecanica', 'type' => 'sport', 'grade' => '6c+'));
        Route::factory()->create(array('lat' => 40.75165873763, 'long' => -3.88518685875, 'name' => 'Fernandillo culolillo', 'type' => 'sport', 'grade' => '6c+'));
        Route::factory()->create(array('lat' => 40.75165873763, 'long' => -3.88518685875, 'name' => 'El escorpión de jade', 'type' => 'sport', 'grade' => '7a'));

        Route::factory()->create(array('lat' => 40.75152072958, 'long' => -3.88454360266, 'name' => 'Antonio Romero menudo', 'type' => 'sport', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.75152072958, 'long' => -3.88454360266, 'name' => 'El retorno del machaca', 'type' => 'sport', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.75152072958, 'long' => -3.88454360266, 'name' => 'Freaky de Galerias', 'type' => 'sport', 'grade' => '4+'));
        Route::factory()->create(array('lat' => 40.75152072958, 'long' => -3.88454360266, 'name' => 'Matanza en el Burger King', 'type' => 'sport', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.75152072958, 'long' => -3.88454360266, 'name' => 'Mostradores Lopez', 'type' => 'sport', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.75152072958, 'long' => -3.88454360266, 'name' => 'Moro', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.75152072958, 'long' => -3.88454360266, 'name' => 'Alfonso', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.75152072958, 'long' => -3.88454360266, 'name' => 'El recuperador de caminos', 'type' => 'sport', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.75152072958, 'long' => -3.88454360266, 'name' => 'Se jodio el burilador', 'type' => 'sport', 'grade' => '4+'));
        Route::factory()->create(array('lat' => 40.75152072958, 'long' => -3.88454360266, 'name' => 'El vuelo del abuelo', 'type' => 'sport', 'grade' => '4'));
        Route::factory()->create(array('lat' => 40.75152072958, 'long' => -3.88454360266, 'name' => 'Multas por todos lados', 'type' => 'sport', 'grade' => '5'));
        Route::factory()->create(array('lat' => 40.75152072958, 'long' => -3.88454360266, 'name' => 'Hazanas belicas', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.75152072958, 'long' => -3.88454360266, 'name' => 'Rana saltarina', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.75152072958, 'long' => -3.88454360266, 'name' => 'Ataque de caspa', 'type' => 'sport', 'grade' => '6a+'));
        Route::factory()->create(array('lat' => 40.75152072958, 'long' => -3.88454360266, 'name' => '¡Que morro!', 'type' => 'sport', 'grade' => '6b'));

        Route::factory()->create(array('lat' => 40.75135834974, 'long' => -3.88575359418, 'name' => 'Adherencia ¡Que paciencia!', 'type' => 'sport', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.75135834974, 'long' => -3.88575359418, 'name' => 'Discusion entre novios', 'type' => 'sport', 'grade' => '7a'));
        Route::factory()->create(array('lat' => 40.75135834974, 'long' => -3.88575359418, 'name' => 'Fisura', 'type' => 'sport', 'grade' => '4+'));
        Route::factory()->create(array('lat' => 40.75135834974, 'long' => -3.88575359418, 'name' => 'Sopa de Gafas', 'type' => 'sport', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.75135834974, 'long' => -3.88575359418, 'name' => 'L.S.D.', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.75135834974, 'long' => -3.88575359418, 'name' => 'Llovia o no llovia', 'type' => 'sport', 'grade' => '7a'));



        Route::factory()->create(array('lat' => 40.7518819004, 'long' => -3.88635847796, 'name' => 'Lo', 'type' => 'sport', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.7518819004, 'long' => -3.88635847796, 'name' => 'Mejor', 'type' => 'sport', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.7518819004, 'long' => -3.88635847796, 'name' => 'Son', 'type' => 'sport', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.7518819004, 'long' => -3.88635847796, 'name' => 'Los', 'type' => 'sport', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.7518819004, 'long' => -3.88635847796, 'name' => 'Quimicos', 'type' => 'sport', 'grade' => '6c'));
        Route::factory()->create(array('lat' => 40.7518819004, 'long' => -3.88635847796, 'name' => 'Silicatos aluminicos', 'type' => 'sport', 'grade' => '5+'));

        Route::factory()->create(array('lat' => 40.7514320422, 'long' => -3.88505610342, 'name' => 'Señorita con experiencia', 'type' => 'sport', 'grade' => '7a+'));
        Route::factory()->create(array('lat' => 40.7514320422, 'long' => -3.88505610342, 'name' => 'La voz del Tajo', 'type' => 'sport', 'grade' => '6c+'));
        Route::factory()->create(array('lat' => 40.7514320422, 'long' => -3.88505610342, 'name' => 'Beso de Licor', 'type' => 'sport', 'grade' => '7b'));
        Route::factory()->create(array('lat' => 40.7514320422, 'long' => -3.88505610342, 'name' => 'El resbalón del tontorrón', 'type' => 'sport', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.7514320422, 'long' => -3.88505610342, 'name' => 'Tú, coge los trozos', 'type' => 'sport', 'grade' => '7b'));
        Route::factory()->create(array('lat' => 40.7514320422, 'long' => -3.88505610342, 'name' => 'Papageno', 'type' => 'sport', 'grade' => '7b+'));

        Route::factory()->create(array('lat' => 40.75179722769, 'long' => -3.88142371968, 'name' => 'Pa septiembre', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.75179722769, 'long' => -3.88142371968, 'name' => 'Jorge Verdasco', 'type' => 'sport', 'grade' => '5'));
        Route::factory()->create(array('lat' => 40.75179722769, 'long' => -3.88142371968, 'name' => 'Celtas', 'type' => 'sport', 'grade' => '6a'));
        Route::factory()->create(array('lat' => 40.75179722769, 'long' => -3.88142371968, 'name' => 'Normal', 'type' => 'trad', 'grade' => '4+'));
        Route::factory()->create(array('lat' => 40.75179722769, 'long' => -3.88142371968, 'name' => 'Segunda lección', 'type' => 'sport', 'grade' => '6a+'));
        Route::factory()->create(array('lat' => 40.75179722769, 'long' => -3.88142371968, 'name' => 'El balcón de los dioses', 'type' => 'trad', 'grade' => '6b+'));
        Route::factory()->create(array('lat' => 40.75179722769, 'long' => -3.88142371968, 'name' => 'Mira un buho', 'type' => 'trad', 'grade' => '5+'));
        Route::factory()->create(array('lat' => 40.75179722769, 'long' => -3.88142371968, 'name' => 'Diedro', 'type' => 'trad', 'grade' => '5'));
        Route::factory()->create(array('lat' => 40.75179722769, 'long' => -3.88142371968, 'name' => 'Espolón del niño', 'type' => 'sport', 'grade' => '6c+'));
        Route::factory()->create(array('lat' => 40.75179722769, 'long' => -3.88142371968, 'name' => 'Nunca tantos follaron tan poco', 'type' => 'sport', 'grade' => '6b'));
        Route::factory()->create(array('lat' => 40.75179722769, 'long' => -3.88142371968, 'name' => 'La puta hernia de los cojones', 'type' => 'sport', 'grade' => '6b+'));
    }
}
