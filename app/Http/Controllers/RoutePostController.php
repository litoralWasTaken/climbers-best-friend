<?php

namespace App\Http\Controllers;

use App\Models\RoutePost;
use Database\Seeders\RoutePostSeeder;
use Illuminate\Http\Request;

class RoutePostController extends Controller
{
    //
    public function index() {
        // $routeposts = RoutePost::all();

        // return response()->json($routeposts);

        return response()->json(['Hola']);
    }

    public function show($index) {
        $routeposts = RoutePost::where('route_id', $index)->get();
        if (!$routeposts->isEmpty()) {
            return response()->json($routeposts);
        } else {
            return response()->json(['message' => 'Ruta sin comentarios. ¡Sé el primero en añadir uno!'], 404);
        }
    }
}
