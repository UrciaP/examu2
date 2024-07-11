<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = [
        'nombre',
        'curso',
        'nota1',
        'nota2',
        'promedio',
        'condicion',
        'fechareg',
    ];
    // use HasFactory;
}
