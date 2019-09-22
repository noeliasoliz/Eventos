<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticuloRequest;
use App\Articulo;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulos = Articulo::latest()->get();

        return response()->json($articulos);
    }

    public function store(ArticuloRequest $request)
    {
        $articulo = Articulo::create($request->all());

        return response()->json($articulo, 201);
    }

    public function show($id)
    {
        $articulo = Articulo::findOrFail($id);

        return response()->json($articulo);
    }

    public function update(ArticuloRequest $request, $id)
    {
        $articulo = Articulo::findOrFail($id);
        $articulo->update($request->all());

        return response()->json($articulo, 200);
    }

    public function destroy($id)
    {
        Articulo::destroy($id);

        return response()->json(null, 204);
    }
}