<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaqueteRequest;
use App\Paquete;

class PaqueteController extends Controller
{
    public function index()
    {
        $paquetes = Paquete::latest()->get();

        return response()->json($paquetes);
    }

    public function store(PaqueteRequest $request)
    {
        $paquete = Paquete::create($request->all());

        return response()->json($paquete, 201);
    }

    public function show($id)
    {
        $paquete = Paquete::findOrFail($id);

        return response()->json($paquete);
    }

    public function update(PaqueteRequest $request, $id)
    {
        $paquete = Paquete::findOrFail($id);
        $paquete->update($request->all());

        return response()->json($paquete, 200);
    }

    public function destroy($id)
    {
        Paquete::destroy($id);

        return response()->json(null, 204);
    }
}