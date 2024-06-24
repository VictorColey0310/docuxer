<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Tarjetas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'codigo',
        'user_id',
        'empresa_id',
        'icono',
        'url',
        'descripcion',
        'imagen',
        'submenu_id'
    ];

    protected $collection = 'tarjetas';

    public function submenu()
    {
        return $this->belongsTo(Submenu::class,'submenu_id');
    }
}
