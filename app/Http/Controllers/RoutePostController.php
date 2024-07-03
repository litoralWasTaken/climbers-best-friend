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


    public function store(Request $request) {
        // return response()->json($request->user());
        $validate = $request->validate([
            'ascentDate' => 'required|date',
            'comment' => 'required|string|max:256',
        ]);
        // $post = RoutePost::create(['ascent_date' => $request->ascentDate, 'rating' => $request->rating, 'comment' => $request->comment, 'user_id' => $request->user()->id, 'route_id' => $request->route_id]);
        $post = new RoutePost();

        $post->ascent_date = $validate['ascentDate'];
        $post->rating = $request->rating;
        $post->comment = $validate['comment'];
        $post->user_id = $request->user()->id;
        $post->route_id = $request->route_id;

        $post->save();

        $postId = $post->id;

        $validateFiles = $request->validate([
            'media' => 'array|max:4',
            'media.*' => 'nullable|file|mimes:jpg,png,mp4,mkv'
        ]);

        foreach ($request->file('media', []) as $index => $file) {
            # code...
            if ($file) {

                $filePath = $file->store('uploads', 'public');

                $fileObj = new RoutePostMedia();

                $fileObj->photo_or_video_url = $filePath;
                $fileObj->route_id = $request->route_id;
                $fileObj->route_post_id = $postId;
                $fileObj->user_id = $request->user()->id;

                $fileObj->save();
            }
        }
        return response()->json(['message' => 'Comentario añadido satisfactoriamente']);


    }
}
