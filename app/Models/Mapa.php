<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Mapa extends Model
{
    use HasFactory;

    protected $fillable = [
        'empresa_id',
        'user_id',
        'address',
        'latitude',
        'longitude',
    ];

    protected $collection = 'mapa';
}
