<?php

namespace App\Http\Controllers;

use App\Models\TipoTransaccion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipoTransaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

        return view('tipostransaccions.index',[

            'tipostransaccions' => TipoTransaccion::with('user')->orderBy('id', 'DESC')->get()

        ]);
        
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(){

        return view('tipostransaccions.new');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        
        $request->validate([
            'nombre' => 'required'
        ]);

        TipoTransaccion::create([
            'nombre' => $request->get('nombre'),
            'user_id' => auth()->id(),
        ]);



        return to_route('tipostransaccions.index')->with('status',
            [
                'type' => 'success',
                'message' => 'Guardado con exito',
                'title' => 'Registro'
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoTransaccion $tipoTransaccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoTransaccion $tipotransaccion){
        
        return view('tipostransaccions.edit', [
            'TipoTransaccion' => $tipotransaccion,
        ], compact('tipotransaccion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoTransaccion $tipotransaccion){
        
        $request->validate([
            'nombre' => 'required'
        ]);

        $tipotransaccion->update([
            'nombre' => $request->get('nombre'),
            'user_id' => auth()->id(),
        ]);



        return to_route('tipostransaccions.index')->with('status',
            [
                'type' => 'success',
                'message' => 'Guardado con exito',
                'title' => 'Registro'
            ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoTransaccion $tipotransaccion){
        
        $tipotransaccion->delete();

        return to_route('tipostransaccions.index')->with('status', [
            'type' => 'success',
            'message' => 'Eliminado con exito',
            'title' => 'Registro'
        ]);
    }
}
