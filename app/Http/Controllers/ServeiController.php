<?php

namespace App\Http\Controllers;

use App\Models\Servei;
use Illuminate\Http\Request;

class ServeiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $serveis = Servei::all();
        return view('serveis.index', compact('serveis'));
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
        $servei = new Servei();
        $servei->nom = $request->nom;
        $servei->descripcio = $request->descripcio;
        $servei->preu = $request->preu;
        $servei->save();
        return redirect()->route('serveis.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servei $servei)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servei $servei)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servei $servei)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servei $servei)
    {
        //
    }
}
