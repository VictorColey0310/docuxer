<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Submenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'subtitulo',
        'descripcion',
        'imagen',
        'contenido',
        'url',
        'menu_id'
    ];

    protected $collection = 'submenu';

    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id');
    }

    public function tarjetas(){
        return $this->hasMany(Tarjetas::class,'submenu_id');
    }
}
