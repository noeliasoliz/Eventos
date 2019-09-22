<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdministradorRequest;
use App\Administrador;

class AdministradorController extends Controller
{
    public function index()
    {
        $administradors = Administrador::latest()->get();

        return response()->json($administradors);
    }

    public function store(AdministradorRequest $request)
    {
        $administrador = Administrador::create($request->all());

        return response()->json($administrador, 201);
    }

    public function show($id)
    {
        $administrador = Administrador::findOrFail($id);

        return response()->json($administrador);
    }

    public function update(AdministradorRequest $request, $id)
    {
        $administrador = Administrador::findOrFail($id);
        $administrador->update($request->all());

        return response()->json($administrador, 200);
    }

    public function destroy($id)
    {
        Administrador::destroy($id);

        return response()->json(null, 204);
    }
}