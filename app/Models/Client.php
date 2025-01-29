<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * MODELO CLIENTE
 */
class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'contact_name',
        'contact_lastname',
        'phone',
        'email',
        'address',
        'city',
        'state',
        'razon_social',
        'rut_empresa',
        'giro',
        'comuna',
        'region',
        'pais',
        'codigo_postal',
        'telefono_empresa'
    ];
}