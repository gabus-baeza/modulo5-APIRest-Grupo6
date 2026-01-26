<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
// Agregar la clase Validator para validar los datos de la petición
use Illuminate\Support\Facades\Validator;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Recuperar todos los recursos
        $eventos = Evento::all();

        $respuesta = [
            'eventos' => $eventos,
            'status' => 200,
        ];

        return response()->json($respuesta);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento)
    {
        //
    }
}
