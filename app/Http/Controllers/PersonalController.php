<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalRequest;
use App\Personal;

class PersonalController extends Controller
{
    public function index()
    {
        $personals = Personal::latest()->get();

        return response()->json($personals);
    }

    public function store(PersonalRequest $request)
    {
        $personal = Personal::create($request->all());

        return response()->json($personal, 201);
    }

    public function show($id)
    {
        $personal = Personal::findOrFail($id);

        return response()->json($personal);
    }

    public function update(PersonalRequest $request, $id)
    {
        $personal = Personal::findOrFail($id);
        $personal->update($request->all());

        return response()->json($personal, 200);
    }

    public function destroy($id)
    {
        Personal::destroy($id);

        return response()->json(null, 204);
    }
}