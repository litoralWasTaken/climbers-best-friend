<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\RoutePost;
use App\Models\RoutePostMedia;
use App\Models\User;
use App\Models\UserFollows;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserController extends Controller
{
    public function show($id = null)
    {
        if ($id) {
            $user = User::findOrFail($id);
        } else {
            $user = Auth::user();
        }

        $yourUser = Auth::user();
        $areYouFollowing = false;
        $status = (object)[];

        if ($yourUser->id != $user->id) {
            // reemplazar por llamada de many to many
            // $areYouFollowing = $yourUser->follows()->where('user_id_followed', $yourUser->id)->exists();
            $status->areYouFollowing = UserFollows::where([
                ['user_id', '=', $yourUser->id],
                ['user_id_followed', '=', $user->id]
            ])->exists();
            $status->areTheyFollowing = UserFollows::where([
                ['user_id', '=', $user->id],
                ['user_id_followed', '=', $yourUser->id]
            ])->exists();
        }

        $posts = RoutePost::where('user_id', $user->id)->get();
        foreach ($posts as $key => $post) {
            $route_media = RoutePostMedia::where('route_post_id', $post->id)->get();
            $route = Route::find($post->route_id);

            $post->route_name = $route->name;
            $post->media = $route_media;
            $post->user_name = $user->name;
            $post->user_profile_photo_path = $user->profile_photo_path;
        }


        return Inertia::render('UserProfilePage', [
            'user' => $user,
            'posts' => $posts,
            'status' => $status,
            'user_id_auth' => $yourUser->id,
            'user_id_search' => $user->id,
        ]);
    }


    public function follow(Request $request)
    {
        $id = $request->id;
        $userToFollow = User::findOrFail($id);
        $authUser = Auth::user();

        if (!$authUser->follows()->where('user_id_followed', $userToFollow->id)->exists()) {
            UserFollows::create([
                'user_id' => $authUser->id,
                'user_id_followed' => $userToFollow->id,
            ]);

            return response()->json(['message' => 'User followed successfully.'], 200);
        }

        return response()->json(['message' => 'Already following this user.'], 400);
    }


    public function unfollow(Request $request)
    {
        $id = $request->id;
        $userToUnfollow = User::findOrFail($id);
        $authUser = Auth::user();

        $follow = UserFollows::where('user_id', $authUser->id)
            ->where('user_id_followed', $userToUnfollow->id)
            ->first();

        if ($follow) {
            $follow->delete();

            return response()->json(['message' => 'User unfollowed successfully.'], 200);
        }

        return response()->json(['message' => 'You are not following this user.'], 400);
    }
}
