<?php

namespace App\Http\Controllers;

use App\Models\Comanda;
use App\Models\Espai;
use App\Models\Servei;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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
        $serveis = Servei::all(); // Obtener la lista de servicios disponibles

        return view('comandes.create', compact('espais'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
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
        $comanda->Nom = $request->nom;
        $comanda->cognom = $request->cognom;
        $comanda->email = $request->email;
        $comanda->telefon = $request->telefon;
        $comanda->num_atendents = $request->num_atendents;
        $comanda->Espais_idEspais = $request->espais_id;
        $comanda->data_entrada = $request->data_entrada;
        $comanda->data_sortida = $request->data_sortida;
        $comanda->hora_entrada = $request->hora_entrada;
        $comanda->hora_sortida = $request->hora_sortida;
        $comanda->estat = 'pendent'; // Valor predeterminado para el campo estat
        $comanda->save();

        if (Auth::check()) {
            return redirect()->route('comandes.index');
        } else {
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comanda = Comanda::findOrFail($id);
        $espais = Espai::all();

        return view('comandes.show', compact('comanda', 'espais',));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $comanda = Comanda::findOrFail($id);
        $espais = Espai::all();

        return view('comandes.edit', compact('comanda', 'espais',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $comanda = Comanda::findOrFail($id);
        $comanda->Nom = $request->nom;
        $comanda->cognom = $request->cognom;
        $comanda->email = $request->email;
        $comanda->telefon = $request->telefon;
        $comanda->num_atendents = $request->num_atendents;
        $comanda->Espais_idEspais = $request->espais_id;
        $comanda->data_entrada = $request->data_entrada;
        $comanda->data_sortida = $request->data_sortida;
        $comanda->hora_entrada = $request->hora_entrada;
        $comanda->hora_sortida = $request->hora_sortida;
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
