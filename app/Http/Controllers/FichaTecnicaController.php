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
        'cedula' => $request->get('cedula'),
        'nom_propietario' => $request->get('nom_propietario'),
        'telefono' => $request->get('telefono'),
        'nom_propiedad' => $request->get('nom_propiedad'),
        'barrio' => $request->get('barrio'),
        'direccion' => $request->get('direccion'),
        'valor' => $request->get('valor'),
        'administracion' => $request->get('administracion'),
        'tipo_inmueble' => $request->get('tipo_inmueble'),
        'tipo_transaccion' => $request->get('tipo_transaccion'),
        'alcobas' => $request->get('alcobas'),
        'closet' => $request->get('closet'),
        'baño' => $request->get('baño'),
        'estrato' => $request->get('estrato'),
        'area' => $request->get('area'),
        'piso' => $request->get('piso'),
        'calentador' => $request->get('calentador'),
        'vestier' => $request->get('vestier'),
        'cocina' => $request->get('cocina'),
        'balcon' => $request->get('balcon'),
        'sala_comedor' => $request->get('sala_comedor'),
        'patio' => $request->get('patio'),
        'zona_ropa' => $request->get('zona_ropa'),
        'estudio_estar' => $request->get('estudio_estar'),
        'red_gas' => $request->get('red_gas'),
        'cuarto_util' => $request->get('cuarto_util'),
        'ascensor' => $request->get('ascensor'),
        'parqueadero' => $request->get('parqueadero'),
        'parqueadero_visitantes' => $request->get('parqueadero_visitantes'),
        'juegos_infantiles' => $request->get('juegos_infantiles'),
        'salon_social' => $request->get('salon_social'),
        'propiedad_horizontal' => $request->get('propiedad_horizontal'),
        'citofono' => $request->get('citofono'),
        'unidad' => $request->get('unidad'),
        'tipo_porteria' => $request->get('tipo_porteria'),
        'shut_basura' => $request->get('shut_basura'),
        'jacuzzi' => $request->get('jacuzzi'),
        'gimnasio' => $request->get('gimnasio'),
        'turco' => $request->get('turco'),
        'biblioteca' => $request->get('biblioteca'),
        'circuito_cerrado' => $request->get('circuito_cerrado'),




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