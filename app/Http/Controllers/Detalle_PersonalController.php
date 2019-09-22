<?php

namespace App\Http\Controllers;

use App\Http\Requests\Detalle_PersonalRequest;
use App\Detalle_Personal;

class Detalle_PersonalController extends Controller
{
    public function index()
    {
        $detalle_personals = Detalle_Personal::latest()->get();

        return response()->json($detalle_personals);
    }

    public function store(Detalle_PersonalRequest $request)
    {
        $detalle_personal = Detalle_Personal::create($request->all());

        return response()->json($detalle_personal, 201);
    }

    public function show($id)
    {
        $detalle_personal = Detalle_Personal::findOrFail($id);

        return response()->json($detalle_personal);
    }

    public function update(Detalle_PersonalRequest $request, $id)
    {
        $detalle_personal = Detalle_Personal::findOrFail($id);
        $detalle_personal->update($request->all());

        return response()->json($detalle_personal, 200);
    }

    public function destroy($id)
    {
        Detalle_Personal::destroy($id);

        return response()->json(null, 204);
    }
}