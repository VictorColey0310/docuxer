<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'url',
        'user_id',
        'empresa_id',
    ];

    protected $collection = 'menu';

    public function submenu(){
        return $this->hasMany(Submenu::class,'menu_id');
    }
}
