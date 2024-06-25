<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoutePost extends Model
{
    use HasFactory;

    protected $fillable = [
        'ascent_date',
        'rating',
        'comment',

        'user_id',
        'route_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function route() {
        return $this->belongsTo(Route::class);
    }

}
