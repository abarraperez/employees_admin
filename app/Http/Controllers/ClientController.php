<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clientes'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**Guardar Clientes */
    public function __invoke(Request $request)
    {
        //Validacion de datos
        $request->validate([
            'company_name'=>'required|string|max:255',
            'contact_name'=>'string|max:255',
            'contact_lastname'=>'string|max:255',
            'phone'=>'string|max:255',
            'email'=>'string|max:255',
            'address'=>'string|max:255',
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

        $cliente = new Client();
        $cliente->company_name = $request->company_name;
        $cliente->contact_name = $request->contact_name;
        $cliente->contact_lastname = $request->contact_lastname;
        $cliente->phone = $request->phone;
        $cliente->email = $request->email;
        $cliente->address = $request->address;
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

        return view('cliente.create', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */

     /**Mostrar Clientes */
    public function show()
    {
        $cliente = Client::all();
        return view('cliente.leer', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
