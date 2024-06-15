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
}
