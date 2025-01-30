<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
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
        'telefono_empresa',
        'banco',
        'tipo_cuenta',
        'numero_cuenta',
        'email_facturacion',
        'telefono_facturacion',
        'direccion_facturacion',
        'ciudad_facturacion',
        'comuna_facturacion',
        'region_facturacion',
        'pais_facturacion'
    ];
}
