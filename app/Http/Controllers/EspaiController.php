<?php

namespace App\Http\Controllers;

use App\Models\Espai;
use Illuminate\Http\Request;

class EspaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->user()->tokenCan('read'))
        {
            return Espai::all();
            return view('espais.index', ['espais' => Espai::all()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if($request->user()->tokenCan('create'))
        {
            return view('espais.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->user()->tokenCan('create', 'read'))
        {
            $espai = new Espai();
            $espai->id = $request->id;
            $espai->nom = $request->nom;
            $espai->capacitat = $request->capacitat;
            $espai->tipus = $request->tipus;
            $espai->save();
            return redirect()->route('espais.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Espai $espai)
    {
        if($request->user()->tokenCan('read'))
        {
            return $espai;
            return view('espais.show', ['espai' => $espai]);
        }
        else
        {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Espai $espai)
    {
        if($request->user()->tokenCan('update'))
        {
            return view('espais.edit', ['espai' => $espai]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Espai $espai)
    {
        if($request->user()->tokenCan('update', 'read'))
        {
            $espai->id = $request->id;
            $espai->nom = $request->nom;
            $espai->capacitat = $request->capacitat;
            $espai->tipus = $request->tipus;
            $espai->save();
            return redirect()->route('espais.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Espai $espai)
    {
        if($request->user()->tokenCan('delete', 'read'))
        {
            $espai->delete();
            return redirect()->route('espais.index');
        }
    }
}
