<?php

namespace App\Http\Controllers;

use App\Http\Requests\EvaluacionRequest;
use App\Evaluacion;

class EvaluacionController extends Controller
{
    public function index()
    {
        $evaluacions = Evaluacion::latest()->get();

        return response()->json($evaluacions);
    }

    public function store(EvaluacionRequest $request)
    {
        $evaluacion = Evaluacion::create($request->all());

        return response()->json($evaluacion, 201);
    }

    public function show($id)
    {
        $evaluacion = Evaluacion::findOrFail($id);

        return response()->json($evaluacion);
    }

    public function update(EvaluacionRequest $request, $id)
    {
        $evaluacion = Evaluacion::findOrFail($id);
        $evaluacion->update($request->all());

        return response()->json($evaluacion, 200);
    }

    public function destroy($id)
    {
        Evaluacion::destroy($id);

        return response()->json(null, 204);
    }
}