<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnticipoRequest;
use App\Anticipo;

class AnticipoController extends Controller
{
    public function index()
    {
        $anticipos = Anticipo::latest()->get();

        return response()->json($anticipos);
    }

    public function store(AnticipoRequest $request)
    {
        $anticipo = Anticipo::create($request->all());

        return response()->json($anticipo, 201);
    }

    public function show($id)
    {
        $anticipo = Anticipo::findOrFail($id);

        return response()->json($anticipo);
    }

    public function update(AnticipoRequest $request, $id)
    {
        $anticipo = Anticipo::findOrFail($id);
        $anticipo->update($request->all());

        return response()->json($anticipo, 200);
    }

    public function destroy($id)
    {
        Anticipo::destroy($id);

        return response()->json(null, 204);
    }
}