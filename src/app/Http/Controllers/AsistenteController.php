<?php

namespace App\Http\Controllers;

use App\Models\Asistente;
use Illuminate\Http\Request;

class AsistenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asistentes = Asistente::all();

        $respuesta = [
            'asistentes' => $asistentes,
            'status' => 200
        ];

        return response() -> json($respuesta);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request -> all(),[
            'nombre' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'evento_id' => 'required|exists:eventos,id',
        ]);

        if ($validator->fails()){

            $respuesta = [
                'message' => 'Datos inválidos',
                'status' => 400];
            return response() -> json($respuesta,400);
        }

        $asistente = Asistente::create($request->all());

        if (!$asistente) {
                $respuesta = [
                'message' => 'Error al crear el asistente',
                'status' => 500, // Error interno del servidor
                ];
                return response()->json($respuesta, 500);
        }

         $respuesta = [
                'asistente' => $asistente,
                'status' => 201];


        return response() -> json($respuesta,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Asistente $asistente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asistente $asistente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asistente $asistente)
    {
        //
    }
}
