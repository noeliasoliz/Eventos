<?php

namespace App\Http\Controllers;

use App\Http\Requests\clienteRequest;
use App\cliente;

class clienteController extends Controller
{
    public function index()
    {
        $clientes = cliente::latest()->get();

        return response()->json($clientes);
    }

    public function store(clienteRequest $request)
    {
        $cliente = cliente::create($request->all());

        return response()->json($cliente, 201);
    }

    public function show($id)
    {
        $cliente = cliente::findOrFail($id);

        return response()->json($cliente);
    }

    public function update(clienteRequest $request, $id)
    {
        $cliente = cliente::findOrFail($id);
        $cliente->update($request->all());

        return response()->json($cliente, 200);
    }

    public function destroy($id)
    {
        cliente::destroy($id);

        return response()->json(null, 204);
    }
}