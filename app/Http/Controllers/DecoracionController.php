<?php

namespace App\Http\Controllers;

use App\Http\Requests\DecoracionRequest;
use App\Decoracion;

class DecoracionController extends Controller
{
    public function index()
    {
        $decoracions = Decoracion::latest()->get();

        return response()->json($decoracions);
    }

    public function store(DecoracionRequest $request)
    {
        $decoracion = Decoracion::create($request->all());

        return response()->json($decoracion, 201);
    }

    public function show($id)
    {
        $decoracion = Decoracion::findOrFail($id);

        return response()->json($decoracion);
    }

    public function update(DecoracionRequest $request, $id)
    {
        $decoracion = Decoracion::findOrFail($id);
        $decoracion->update($request->all());

        return response()->json($decoracion, 200);
    }

    public function destroy($id)
    {
        Decoracion::destroy($id);

        return response()->json(null, 204);
    }
}