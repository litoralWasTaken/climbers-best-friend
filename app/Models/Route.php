<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $fillable = [
        'leaflet_id',
        'name',
        'type', // boulder, deportiva, trad
        'grade', // escala fontainebleau
    ];
}
