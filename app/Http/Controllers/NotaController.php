<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotaRequest;
use App\Nota;

class NotaController extends Controller
{
    public function index()
    {
        $notas = Nota::latest()->get();

        return response()->json($notas);
    }

    public function store(NotaRequest $request)
    {
        $nota = Nota::create($request->all());

        return response()->json($nota, 201);
    }

    public function show($id)
    {
        $nota = Nota::findOrFail($id);

        return response()->json($nota);
    }

    public function update(NotaRequest $request, $id)
    {
        $nota = Nota::findOrFail($id);
        $nota->update($request->all());

        return response()->json($nota, 200);
    }

    public function destroy($id)
    {
        Nota::destroy($id);

        return response()->json(null, 204);
    }
}