<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AgendaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $events = [];
 
        $appointments = Appointment::with(['client'])->get();
 
        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => $appointment->client->company_name,
                'backgroundColor' => '#c7832b', // Rojo tomate
                'borderColor' => '#ff4500',    // Naranja oscuro
                'description' => "C".$appointment->title,    
                'start' => $appointment->start_time,
                'end' => $appointment->finish_time,
            ];
        }
 
        return view('agenda', compact('events'));
    }
}
