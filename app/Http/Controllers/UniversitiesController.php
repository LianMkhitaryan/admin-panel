<?php

namespace App\Http\Controllers;

use App\Http\Requests\UniversityRequest;
use App\Models\University;

class UniversitiesController extends Controller
{
    public function index()
    {
        $universities = University::all();
        return view('universities.index', compact('universities'));
    }

    public function create()
    {
        return view('universities.create');
    }

    public function store(UniversityRequest $request)
    {
        $university = new University();
        $university->name = $request->input('name');
        $university->abbreviation = $request->input('abbreviation');
        $university->address = $request->input('address');
        $university->phone = $request->input('phone');
        $university->email = $request->input('email');
        $university->website = $request->input('website');
        $university->faculties = $request->input('faculties');
        $university->specialities = $request->input('specialities');
        $university->save();

        return redirect()->route('universities.index');
    }

    public function edit($id)
    {
        $university = University::findOrFail($id);
        return view('universities.edit', compact('university'));
    }

    public function update(UniversityRequest $request, $id)
    {
        $university = University::findOrFail($id);
        $university->name = $request->input('name');
        $university->abbreviation = $request->input('abbreviation');
        $university->address = $request->input('address');
        $university->phone = $request->input('phone');
        $university->email = $request->input('email');
        $university->website = $request->input('website');
        $university->faculties = $request->input('faculties');
        $university->specialities = $request->input('specialities');
        $university->save();

        return redirect()->route('universities.index');
    }

    public function destroy($id)
    {
        $university = University::findOrFail($id);
        $university->delete();

        return redirect()->route('universities.index');
    }
}
