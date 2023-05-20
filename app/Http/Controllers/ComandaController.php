<?php

namespace App\Http\Controllers;

use App\Models\Comanda;
use App\Models\Espai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $espais = Espai::all();

        $comandes = Comanda::all();
        $desired_state = 'pendent';
        return view('comandes.index', compact('comandes', 'desired_state',));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $espais = Espai::all(); // Obtener la lista de espacios disponibles

        return view('comandes.create', compact('espais'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lletra_espai' => 'required',
            'cognom' => 'required',
            'email' => 'required',
            'num_atendents' => 'required',
            'espais_id' => 'required',
            'data_entrada' => 'required',
            'data_sortida' => 'required',
        ]);

        if ($validator->fails()) {
            // Devolver vista con el error
            return response()->json(['error' => $validator->errors()], 400);
        }

        $comanda = new Comanda();
        $comanda->id = $request->id;
        $comanda->lletra_espai = $request->lletra_espai;
        $comanda->Nom = $request->nom;
        $comanda->cognom = $request->cognom;
        $comanda->email = $request->email;
        $comanda->telèfon = $request->telèfon;
        $comanda->num_atendents = $request->num_atendents;
        $comanda->Espais_idEspais = $request->espais_id;
        $comanda->data_entrada = $request->data_entrada;
        $comanda->data_sortida = $request->data_sortida;
        $comanda->estat = 'pendent'; // Valor predeterminado para el campo estat
        $comanda->save();

        return redirect()->route('comandes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $comanda = Comanda::findOrFail($id);
    $espais = Espai::all();

    return view('comandes.show', compact('comanda', 'espais'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Comanda $comanda)
    {
        if ($request->user()->tokenCan('update')) {
            return view('comandes.edit', ['comanda' => $comanda]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comanda $comanda)
    {
        $validator = Validator::make($request->all(), [
            'lletra_espai' => 'required',
            'cognom' => 'required',
            'email' => 'required',
            'num_atendents' => 'required',
            'espais_id' => 'required',
            'data_entrada' => 'required',
            'data_sortida' => 'required',
        ]);


        return response()->json(['error' => $validator->errors()], 400);


        $comanda->id = $request->id;
        $comanda->lletra_espai = $request->lletra_espai;
        $comanda->Nom = $request->nom;
        $comanda->cognom = $request->cognom;
        $comanda->email = $request->email;
        $comanda->telèfon = $request->telèfon;
        $comanda->num_atendents = $request->num_atendents;
        $comanda->Espais_idEspais = $request->espais_id;
        $comanda->data_entrada = $request->data_entrada;
        $comanda->data_sortida = $request->data_sortida;
        $comanda->estat = $request->estat;
        $comanda->save();

        return redirect()->route('comandes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comanda = Comanda::find($id);
        $comanda->delete();

        return redirect()->route('comandes.index');
    }

    public function filter(Request $request)
    {
        $estado = $request->input('estado');
        $query = Comanda::query();

        if ($estado) {
            $query->where('estat', $estado);
        }

        $comandes = $query->get();

        return view('comandes.index', ['comandes' => $comandes]);
    }
}
