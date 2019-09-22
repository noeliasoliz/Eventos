<?php

namespace App\Http\Controllers;

use App\Http\Requests\usuarioRequest;
use App\usuario;

class usuarioController extends Controller
{
    public function index()
    {
        $usuarios = usuario::latest()->get();

        return response()->json($usuarios);
    }

    public function store(usuarioRequest $request)
    {
        $usuario = usuario::create($request->all());

        return response()->json($usuario, 201);
    }

    public function show($id)
    {
        $usuario = usuario::findOrFail($id);

        return response()->json($usuario);
    }

    public function update(usuarioRequest $request, $id)
    {
        $usuario = usuario::findOrFail($id);
        $usuario->update($request->all());

        return response()->json($usuario, 200);
    }

    public function destroy($id)
    {
        usuario::destroy($id);

        return response()->json(null, 204);
    }
}