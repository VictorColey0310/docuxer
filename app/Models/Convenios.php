<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Convenios extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'user_id',
        'empresa_id',
        'url',
        'grupo_id'
    ];

    protected $collection = 'convenios';

    public function grupo_convenios()
    {
        return $this->belongsTo(GrupoConvenios::class,'grupo_id');
    }
}
