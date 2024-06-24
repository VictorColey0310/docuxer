<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'imagen',
        'cargo',
        'user_id',
        'empresa_id'
    ];

    protected $collection = 'equipo';}
