<?php

namespace App\Http\Controllers;

use App\Http\Requests\Detalle_PaqueteRequest;
use App\Detalle_Paquete;

class Detalle_PaqueteController extends Controller
{
    public function index()
    {
        $detalle_paquetes = Detalle_Paquete::latest()->get();

        return response()->json($detalle_paquetes);
    }

    public function store(Detalle_PaqueteRequest $request)
    {
        $detalle_paquete = Detalle_Paquete::create($request->all());

        return response()->json($detalle_paquete, 201);
    }

    public function show($id)
    {
        $detalle_paquete = Detalle_Paquete::findOrFail($id);

        return response()->json($detalle_paquete);
    }

    public function update(Detalle_PaqueteRequest $request, $id)
    {
        $detalle_paquete = Detalle_Paquete::findOrFail($id);
        $detalle_paquete->update($request->all());

        return response()->json($detalle_paquete, 200);
    }

    public function destroy($id)
    {
        Detalle_Paquete::destroy($id);

        return response()->json(null, 204);
    }
}