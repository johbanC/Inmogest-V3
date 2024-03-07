<?php

namespace App\Http\Controllers;

use App\Models\FichaTecnica;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//SE AGREGO ESTE PARA PODER LLENAR EL SELECT OPTION
use App\Models\TipoTransaccion;

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
        $transacciones = TipoTransaccion::all()->pluck('nombre', 'id');
        return view('fichastecnicas.new', compact('transacciones'));


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

     $vestier = $request->filled('vestier');
     $cocina = $request->filled('cocina');
     $balcon = $request->filled('balcon');
     $sala_comedor = $request->filled('sala_comedor');
     $patio = $request->filled('patio');
     $zona_ropa = $request->filled('zona_ropa');
     $estudio_estar = $request->filled('estudio_estar');
     $red_gas = $request->filled('red_gas');
     $cuarto_util = $request->filled('cuarto_util');
     $ascensor = $request->filled('ascensor');
     $parqueadero = $request->filled('parqueadero');
     $juegos_infantiles = $request->filled('juegos_infantiles');
     $salon_social = $request->filled('salon_social');
     $propiedad_horizontal = $request->filled('propiedad_horizontal');
     $citofono = $request->filled('citofono');
     $unidad = $request->filled('unidad');
     $tipo_porteria = $request->filled('tipo_porteria');
     $shut_basura = $request->filled('shut_basura');
     $jacuzzi = $request->filled('jacuzzi');
     $gimnasio = $request->filled('gimnasio');
     $turco = $request->filled('turco');
     $biblioteca = $request->filled('biblioteca');
     $circuito_cerrado = $request->filled('circuito_cerrado');

     // Formatear el valor para la base de datos
     $valor = str_replace(array('.', ','), array('', '.'), $request->get('valor'));
     $administracion = str_replace(array('.', ','), array('', '.'), $request->get('administracion'));


     FichaTecnica::create([
        'cedula' => $request->get('cedula'),
        'nom_propietario' => $request->get('nom_propietario'),
        'telefono' => $request->get('telefono'),
        'nom_propiedad' => $request->get('nom_propiedad'),
        'barrio' => $request->get('barrio'),
        'direccion' => $request->get('direccion'),
        'valor' => $valor, // Valor formateado
        'administracion' => $administracion, // Valor formateado
        'tipo_inmueble' => $request->get('tipo_inmueble'),
        'tipo_transaccions_id' => $request->get('tipo_transaccions_id'),
        'alcobas' => $request->get('alcobas'),
        'closet' => $request->get('closet'),
        'baño' => $request->get('baño'),
        'estrato' => $request->get('estrato'),
        'area' => $request->get('area'),
        'piso' => $request->get('piso'),
        'calentador' => $request->get('calentador'),
        'vestier' => $vestier,
        'cocina' => $cocina,
        'balcon' => $balcon,
        'sala_comedor' => $sala_comedor,
        'patio' => $patio,
        'zona_ropa' => $zona_ropa,
        'estudio_estar' => $estudio_estar,
        'red_gas' => $red_gas,
        'cuarto_util' => $cuarto_util,
        'ascensor' => $ascensor,
        'parqueadero' => $parqueadero,
        'juegos_infantiles' => $juegos_infantiles,
        'salon_social' => $salon_social,
        'propiedad_horizontal' => $propiedad_horizontal,
        'citofono' => $citofono,
        'unidad' => $unidad,
        'tipo_porteria' => $tipo_porteria,
        'shut_basura' => $shut_basura,
        'jacuzzi' => $jacuzzi,
        'gimnasio' => $gimnasio,
        'turco' => $turco,
        'biblioteca' => $biblioteca,
        'circuito_cerrado' => $circuito_cerrado,




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
    public function edit(FichaTecnica $fichastecnicas)
{
    $transacciones = TipoTransaccion::all()->pluck('nombre', 'id');
    
    return view('fichastecnicas.edit', [
        'FichaTecnica' => $fichastecnicas,
        'transacciones' => $transacciones,
    ]);
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