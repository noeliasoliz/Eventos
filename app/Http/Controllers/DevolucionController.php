<?php

namespace App\Http\Controllers;

use App\Http\Requests\DevolucionRequest;
use App\Devolucion;

class DevolucionController extends Controller
{
    public function index()
    {
        $devolucions = Devolucion::latest()->get();

        return response()->json($devolucions);
    }

    public function store(DevolucionRequest $request)
    {
        $devolucion = Devolucion::create($request->all());

        return response()->json($devolucion, 201);
    }

    public function show($id)
    {
        $devolucion = Devolucion::findOrFail($id);

        return response()->json($devolucion);
    }

    public function update(DevolucionRequest $request, $id)
    {
        $devolucion = Devolucion::findOrFail($id);
        $devolucion->update($request->all());

        return response()->json($devolucion, 200);
    }

    public function destroy($id)
    {
        Devolucion::destroy($id);

        return response()->json(null, 204);
    }
}