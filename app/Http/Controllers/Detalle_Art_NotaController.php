<?php

namespace App\Http\Controllers;

use App\Http\Requests\Detalle_Art_NotaRequest;
use App\Detalle_Art_Nota;

class Detalle_Art_NotaController extends Controller
{
    public function index()
    {
        $detalle_art_notas = Detalle_Art_Nota::latest()->get();

        return response()->json($detalle_art_notas);
    }

    public function store(Detalle_Art_NotaRequest $request)
    {
        $detalle_art_nota = Detalle_Art_Nota::create($request->all());

        return response()->json($detalle_art_nota, 201);
    }

    public function show($id)
    {
        $detalle_art_nota = Detalle_Art_Nota::findOrFail($id);

        return response()->json($detalle_art_nota);
    }

    public function update(Detalle_Art_NotaRequest $request, $id)
    {
        $detalle_art_nota = Detalle_Art_Nota::findOrFail($id);
        $detalle_art_nota->update($request->all());

        return response()->json($detalle_art_nota, 200);
    }

    public function destroy($id)
    {
        Detalle_Art_Nota::destroy($id);

        return response()->json(null, 204);
    }
}