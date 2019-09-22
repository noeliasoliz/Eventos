<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dev_ArticuloRequest;
use App\Dev_Articulo;

class Dev_ArticuloController extends Controller
{
    public function index()
    {
        $dev_articulos = Dev_Articulo::latest()->get();

        return response()->json($dev_articulos);
    }

    public function store(Dev_ArticuloRequest $request)
    {
        $dev_articulo = Dev_Articulo::create($request->all());

        return response()->json($dev_articulo, 201);
    }

    public function show($id)
    {
        $dev_articulo = Dev_Articulo::findOrFail($id);

        return response()->json($dev_articulo);
    }

    public function update(Dev_ArticuloRequest $request, $id)
    {
        $dev_articulo = Dev_Articulo::findOrFail($id);
        $dev_articulo->update($request->all());

        return response()->json($dev_articulo, 200);
    }

    public function destroy($id)
    {
        Dev_Articulo::destroy($id);

        return response()->json(null, 204);
    }
}