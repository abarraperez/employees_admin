<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * CREAR CLIENTE
     */
    public function store(Request $request)
    {
        //validacion de datos
        $request->validate([
            'company_name'=>'required|string|max:255',
            'contact_name'=>'string|max:255',
            'contact_lastname'=>'string|max:255',
            'phone'=>'string|max:255',
            'email'=>'string|max:255',
            'adress'=>'string|max:255',
            'city'=>'string|max:255',
            'state'=>'string|max:255',
            'razon_social'=>'string|max:255',
            'rut_empresa'=>'string|max:255',
            'giro'=>'string|max:255',
            'comuna'=>'string|max:255',
            'region'=>'string|max:255',
            'pais'=>'string|max:255',
            'codigo_postal'=>'string|max:255',
            'telefono_empresa'=>'string|max:255'
        ]);

        //Almacenamiento -> Nuevo Cliente -> Almacenar datos -> Save
        $cliente = new Client();
        $cliente->company_name = $request->company_name;
        $cliente->contact_name = $request->contact_name;
        $cliente->contact_lastname = $request->contact_lastname;
        $cliente->phone = $request->phone;
        $cliente->email = $request->email;
        $cliente->adress = $request->adress;
        $cliente->city = $request->city;
        $cliente->state = $request->state;
        $cliente->razon_social = $request->razon_social;
        $cliente->rut_empresa = $request->rut_empresa;
        $cliente->giro = $request->giro;
        $cliente->comuna = $request->comuna;
        $cliente->region = $request->region;
        $cliente->pais = $request->pais;
        $cliente->codigo_postal = $request->codigo_postal;
        $cliente->telefono_empresa = $request->telefono_empresa;

        $cliente->save();

        return redirect()->back()->with('success', 'Cliente creado con exito');
    }
}