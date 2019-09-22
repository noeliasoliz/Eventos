<?php

namespace App\Http\Controllers;

use App\Http\Requests\PagoRequest;
use App\Pago;

class PagoController extends Controller
{
    public function index()
    {
        $pagos = Pago::latest()->get();

        return response()->json($pagos);
    }

    public function store(PagoRequest $request)
    {
        $pago = Pago::create($request->all());

        return response()->json($pago, 201);
    }

    public function show($id)
    {
        $pago = Pago::findOrFail($id);

        return response()->json($pago);
    }

    public function update(PagoRequest $request, $id)
    {
        $pago = Pago::findOrFail($id);
        $pago->update($request->all());

        return response()->json($pago, 200);
    }

    public function destroy($id)
    {
        Pago::destroy($id);

        return response()->json(null, 204);
    }
}