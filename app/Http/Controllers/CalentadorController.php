<?php

namespace App\Http\Controllers;

use App\Models\Calentador;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalentadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        
        return view('calentadors.index', [
            'calentadors' => Calentador::with('user')->orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        
        return view('calentadors.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        
        $request->validate([
            'nombre' => 'required'
        ]);

        Calentador::create([
            'nombre' => $request->get('nombre'),
            'user_id' => auth()->id(),
        ]);



        return to_route('calentadors.index')->with('status',
            [
                'type' => 'success',
                'message' => 'Guardado con exito',
                'title' => 'Registro'
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Calentador $calentador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calentador $calentador){
        
        return view('calentadors.edit', [
            'Calentador' => $calentador,
        ], compact('calentador'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Calentador $calentador){
        
        $request->validate([
            'nombre' => 'required'
        ]);

        $calentador->update([
            'nombre' => $request->get('nombre'),
            'user_id' => auth()->id(),
        ]);



        return to_route('calentadors.index')->with('status',
            [
                'type' => 'success',
                'message' => 'Guardado con exito',
                'title' => 'Registro'
            ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calentador $calentador){
        
        $calentador->delete();

        return to_route('calentadors.index')->with('status', [
            'type' => 'success',
            'message' => 'Eliminado con exito',
            'title' => 'Registro'
        ]);
    }
}
