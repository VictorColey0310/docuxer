<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'foto_portada',
        'contenido',
        'empresa_id',
        'user_id',
    ];

    protected $collection = 'blogs';

}
