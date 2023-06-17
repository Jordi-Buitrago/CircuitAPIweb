<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comanda;
use App\Models\Espai;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class ComandaControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->user()->tokenCan('read'))
        {
            return Comanda::all();
            return response()->json(Comanda::all(), 200);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->user()->tokenCan('create', 'read'))
        {
            $validator = Validator::make($request->all(), [
                'id' => 'required',
                'lletra_espai' => 'required',
                'Nom' => 'required',
                'Cognom' => 'required',
                'email' => 'required',
                'telefon' => 'required',
                'num_atendents' => 'required',
                'Espais_idEspais' => 'required',
                'data_entrada' => 'required',
                'data_sortida' => 'required',
                'estat' => 'required',
            ]);

            $data_entrada = Carbon::parse($request->data_entrada);
            $data_sortida = Carbon::parse($request->data_sortida);

            $reservaExistente = Comanda::where('Espais_idEspais', $request->espais_id)
            ->whereDate('data_entrada', '<=', $data_sortida)
            ->whereDate('data_sortida', '>=', $data_entrada)
            ->exists();
            
            $comanda = new Comanda();
            $comanda->id = $request->id;
            $comanda->lletra_espai = $request->lletra_espai;
            $comanda->Nom = $request->Nom;
            $comanda->cognom = $request->cognom;
            $comanda->email = $request->email;
            $comanda->telefon = $request->telefon;
            $comanda->num_atendents = $request->num_atendents;
            $comanda->Espais_idEspais = $request->Espais_idEspais;
            $comanda->data_entrada = $request->data_entrada;
            $comanda->data_sortida = $request->data_sortida;
            $comanda->estat = $request->estat;
            $comanda->save();

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 400);
            }
            if ($reservaExistente) {
                return redirect()->back()->withErrors(['error' => 'No es pot fer una reserva per aquesta data.']);
            }
            return response()->json(['success' => 'Comanda creada'], 201);
        } else {
            return response()->json(['error' => 'No tienes permisos para realizar esta acción'], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        if($request->user()->tokenCan('read'))
        {
            return Comanda::find($id);
            return response()->json(Comanda::find($id), 200);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->user()->tokenCan('update'))
        {
            $validator = Validator::make($request->all(), [
                'id' => 'required',
                'lletra_espai' => 'required',
                'Nom' => 'required',
                'Cognom' => 'required',
                'email' => 'required',
                'telefon' => 'required',
                'num_atendents' => 'required',
                'Espais_idEspais' => 'required',
                'data_entrada' => 'required',
                'data_sortida' => 'required',
                'estat' => 'required',
            ]);
            $comanda = Comanda::find($id);
            $comanda->id = $request->id;
            $comanda->lletra_espai = $request->lletra_espai;
            $comanda->Nom = $request->Nom;
            $comanda->Cognom = $request->Cognom;
            $comanda->email = $request->email;
            $comanda->telefon = $request->telefon;
            $comanda->num_atendents = $request->num_d_atendents;
            $comanda->Espais_idEspais = $request->Espais_idEspais;
            $comanda->data_entrada = $request->data_entrada;
            $comanda->data_sortida = $request->data_sortida;
            $comanda->estat = $request->estat;
            $comanda->save();

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 400);
            }
            return response()->json(['success' => 'Comanda actualitzada'], 201);
        } else {
            return response()->json(['error' => 'No tienes permisos para realizar esta acción'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        if($request->user()->tokenCan('delete'))
        {
            $comanda = Comanda::find($id);
            $comanda->delete();
            return response()->json(['success' => 'Comanda eliminada'], 200);
        } else {
            return response()->json(['error' => 'No tienes permisos para realizar esta acción'], 403);
        }
    }

    public function create (Request $request)
    {
        if($request->user()->tokenCan('create'))
        {
            $comanda = new Comanda();
            $comanda->nom = $request->nom;
            $comanda->cognom = $request->cognom;
            $comanda->email = $request->email;
            $comanda->telefon = $request->telefon;
            $comanda->num_atendents = $request->num_atendents;
            $comanda->Espais_idEspais = $request->espais_id;
            $comanda->data_entrada = $request->data_entrada;
            $comanda->data_sortida = $request->data_sortida;
            $comanda->hora_entrada = $request->hora_entrada;
            $comanda->hora_sortida = $request->hora_sortida;
            $comanda->estat = "pendent";
            $comanda->save();
            return response()->json(['success' => 'Comanda creada'], 201);
        } else {
            return response()->json(['error' => 'No tienes permisos para realizar esta acción'], 403);
        }
    }

    function getComandesByEmail(Request $request, string $email)
    {
        if($request->user()->tokenCan('read'))
        {
            $comandes = Comanda::where('email', $email)->get();
            return response()->json($comandes, 200);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }
}


