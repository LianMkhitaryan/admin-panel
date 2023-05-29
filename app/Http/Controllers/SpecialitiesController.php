<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpecialityRequest;
use App\Models\Speciality;

class SpecialitiesController extends Controller
{
    public function index()
    {
        $specialities = Speciality::all();
        return view('specialities.index', compact('specialities'));
    }

    public function create()
    {
        return view('specialities.create');
    }

    public function store(SpecialityRequest $request)
    {
        $speciality = new Speciality();
        $speciality->name = $request->input('name');
        $speciality->save();

        return redirect()->route('specialities.index');
    }

    public function edit($id)
    {
        $speciality = Speciality::findOrFail($id);
        return view('specialities.edit', compact('speciality'));
    }

    public function update(SpecialityRequest $request, $id)
    {
        $speciality = Speciality::findOrFail($id);
        $speciality->name = $request->input('name');
        $speciality->save();

        return redirect()->route('specialities.index');
    }

    public function destroy($id)
    {
        $speciality = Speciality::findOrFail($id);
        $speciality->delete();

        return redirect()->route('specialities.index');
    }
}
