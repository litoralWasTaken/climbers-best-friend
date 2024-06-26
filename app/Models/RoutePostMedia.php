<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoutePostMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'route_id',
        'photo_or_video_url'
    ];


    public function route_post() {
        return $this->belongsTo(RoutePost::class);
    }
}
