<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoutePostMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'route_id',
        'photo_or_video_url',
        'user_id',
        'route_post_id',
    ];


    public function route_id() {
        return $this->belongsTo(Route::class);
    }

    public function route_post_id() {
        return $this->belongsTo(RoutePost::class);
    }

    public function user_id() {
        return $this->belongsTo(User::class);
    }
}
