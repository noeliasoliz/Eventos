<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalonRequest;
use App\Salon;

class SalonController extends Controller
{
    public function index()
    {
        $salons = Salon::latest()->get();

        return response()->json($salons);
    }

    public function store(SalonRequest $request)
    {
        $salon = Salon::create($request->all());

        return response()->json($salon, 201);
    }

    public function show($id)
    {
        $salon = Salon::findOrFail($id);

        return response()->json($salon);
    }

    public function update(SalonRequest $request, $id)
    {
        $salon = Salon::findOrFail($id);
        $salon->update($request->all());

        return response()->json($salon, 200);
    }

    public function destroy($id)
    {
        Salon::destroy($id);

        return response()->json(null, 204);
    }
}