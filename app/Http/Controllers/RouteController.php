<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    //

    public function index() {
        $routes = Route::all();

        return response()->json($routes);
    }

    public function show($index) {
        $route = Route::where('leaflet_id', $index)->get();

        if (!$route->isEmpty()) {
            return response()->json($route);
        } else {
            return response()->json(['message' => 'Zona no encontrada'], 404);
        }
    }
}