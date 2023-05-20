<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comanda;
use Illuminate\Support\Facades\Validator;

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
                'telèfon' => 'required',
                'num_atendents' => 'required',
                'Espais_idEspais' => 'required',
                'data_entrada' => 'required',
                'data_sortida' => 'required',
                'estat' => 'required',
            ]);
            
            $comanda = new Comanda();
            $comanda->id = $request->id;
            $comanda->lletra_espai = $request->lletra_espai;
            $comanda->Nom = $request->Nom;
            $comanda->cognom = $request->cognom;
            $comanda->email = $request->email;
            $comanda->telèfon = $request->telèfon;
            $comanda->num_atendents = $request->num_atendents;
            $comanda->Espais_idEspais = $request->Espais_idEspais;
            $comanda->data_entrada = $request->data_entrada;
            $comanda->data_sortida = $request->data_sortida;
            $comanda->estat = $request->estat;
            $comanda->save();

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 400);
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
                'telèfon' => 'required',
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
            $comanda->telèfon = $request->telèfon;
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
}