<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\RoutePost;
use App\Models\RoutePostMedia;
use App\Models\User;
use Illuminate\Http\Request;

class RoutePostController extends Controller
{
    //
    public function index() {
        $routeposts = RoutePost::all();

        return response()->json($routeposts);
    }

    public function show($index) {
        $routeposts = RoutePost::where('route_id', $index)->get();
        if (!$routeposts->isEmpty()) {
            $route = Route::find($index)->first();
            if ($route) {

                $route_media = RoutePostMedia::where('route_id', $index)->get();

                foreach ($routeposts as $key => $routepost) {
                    $user = User::find($routepost->user_id);
                    if ($user) {
                        $routepost->user_name = $user->name;
                        $routepost->user_profile_photo_path = $user->profile_photo_path;

                    }
                }
                return response()->json([
                    'route' => $route,
                    'posts' => $routeposts,
                    'route_media' => $route_media
                ]);
            } else {
                return response()->json(['message' => 'Ruta no encontrada.'], 404);
            }

        } else {
            return response()->json(['message' => 'Ruta sin comentarios. ¡Sé el primero en añadir uno!'], 404);
        }
    }
}
