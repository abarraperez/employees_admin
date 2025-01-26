<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'comuna',
        'codigo_postal',
        'rut',
        'cargo',
        'fecha_nacimiento',
        'sexo',
        'estado_civil',
        'nacionalidad',
        'nivel_educacional',
        'institucion',
        'carrera',
        'fecha_ingreso',
        'precio_hora',
    ];

}
