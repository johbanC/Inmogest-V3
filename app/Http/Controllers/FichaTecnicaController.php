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
        return view('fichastecnicas.index');
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

        // Utilizando dd() para imprimir y detener la ejecución del código
    dd($request->all());

    // O puedes utilizar var_dump() si prefieres un formato diferente
    var_dump($request->all());

    //
        
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