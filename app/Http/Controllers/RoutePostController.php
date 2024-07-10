<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\RoutePost;
use App\Models\RoutePostMedia;
use App\Models\User;
use App\Models\UserFollows;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoutePostController extends Controller
{
    //
    public function index()
    {
        $routeposts = RoutePost::all();

        if ($routeposts) {
            foreach ($routeposts as $key => $routepost) {
                $route_media = RoutePostMedia::where('route_post_id', $routepost->id)->get();
                $post_user = User::find($routepost->user_id);
                $route = Route::find($routepost->route_id);

                if ($post_user) {
                    $routepost->media = $route_media;
                    $routepost->user_name = $post_user->name;
                    $routepost->user_profile_photo_path = $post_user->profile_photo_path;
                    $routepost->route_name = $route->name;
                } else {
                    return response()->json(['message' => 'Datos de usuario no encontrados.'], 404);
                }
            }
        } else {
            return response()->json(['message' => 'Comentarios no encontrados.'], 404);
        }

        return response()->json($routeposts);
    }


    public function followed($index)
    {
        $posts = RoutePost::query()
            ->join('user_follows', 'route_posts.user_id', '=', 'user_follows.user_id_followed')
            ->where('user_follows.user_id', $index)
            ->select('route_posts.*')
            ->get();


        foreach ($posts as $key => $post) {
            $route_media = RoutePostMedia::where('route_post_id', $post->id)->get();
            $post_user = User::find($post->user_id);
            $route = Route::find($post->route_id);

            if ($post_user) {
                $post->media = $route_media;
                $post->user_name = $post_user->name;
                $post->user_profile_photo_path = $post_user->profile_photo_path;
                $post->route_name = $route->name;
            } else {
                return response()->json(['message' => 'Datos de usuario no encontrados.'], 404);
            }
        }

        return response()->json($posts);
    }

    public function show($index)
    {
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


    public function store(Request $request)
    {
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

        // $validateFiles = $request->validate([
        //     'media' => 'array|max:4',
        //     'media.*' => 'nullable|file|mimes:jpg,png,mp4,mkv'
        // ]);

        foreach ($request->file('media', []) as $index => $file) {
            if ($file) {
                $validateFiles = $request->validate([
                    'media.*' => 'mimes:jpg,png,mp4,mkv'
                ]);

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

    public function delete(Request $request)
    {
        $post = RoutePost::find($request->index);
        $post->delete();

        return response()->json(['message' => 'Borrado el comentario ' . $request->index]);
    }
}
