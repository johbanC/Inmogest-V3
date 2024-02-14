<?php

namespace App\Http\Controllers;

use App\Models\FichaTecnica;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FichaTecnicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('fichastecnicas.index',[

            'fichastecnicas' => FichaTecnica::with('user')->latest()->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

     $request->validate([
        'cedula' => ['required', 'min:6'],
        'nom_propietario' => ['required', 'min:3'],
        'telefono' => ['required', 'min:10'],
        'nom_propiedad' => ['required', 'min:5'],
        'barrio' => ['required', 'min:5'],
        'direccion' => ['required', 'min:5'],
    ]);

     FichaTecnica::create([
        'cedula'=>$request->get('cedula'),
        'nom_propietario'=>$request->get('nom_propietario'),
        'telefono'=>$request->get('telefono'),
        'nom_propiedad'=>$request->get('nom_propiedad'),
        'barrio'=>$request->get('barrio'),
        'direccion'=>$request->get('direccion'),
        'user_id' => auth()->id(),
    ]);

             //Con esta nueva opcion se va enviar el status con las diferentes opciones para poder visualizar las diferentes notificaciones.

     return to_route('fichastecnicas.index')->with('status', [
        'type' => 'success',
        'message' => 'Guardado con exito',
        'title' => 'Registro'
    ]);


 }

    /**
     * Display the specified resource.
     */
    public function show(FichaTecnica $fichaTecnica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FichaTecnica $fichaTecnica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FichaTecnica $fichaTecnica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FichaTecnica $fichaTecnica)
    {
        //
    }
}