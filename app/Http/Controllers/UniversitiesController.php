<?php

namespace App\Http\Controllers;

use App\Http\Requests\UniversityRequest;
use App\Models\Faculty;
use App\Models\Speciality;
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
        $faculties = Faculty::pluck('name', 'id');
        $specialities = Speciality::pluck('name', 'id');

        return view('universities.create', compact(
            'faculties',
            'specialities'
        ));
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
        $university->save();

        $university->faculties()->sync($request->input('faculties'));
        $university->specialities()->sync($request->input('specialities'));

        return redirect()->route('universities.index');
    }

    public function edit($id)
    {
        $university = University::findOrFail($id);
        $faculties = Faculty::pluck('name', 'id');
        $specialities = Speciality::pluck('name', 'id');
        $selectedFacultiesIds = $university->faculties()->pluck('faculty_id')->toArray();
        $selectedSpecialitiesIds = $university->specialities()->pluck('speciality_id')->toArray();

        return view('universities.edit', compact(
            'university',
            'faculties',
            'specialities',
            'selectedFacultiesIds',
            'selectedSpecialitiesIds'
        ));
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
        $university->save();

        $university->faculties()->sync($request->input('faculties'));
        $university->specialities()->sync($request->input('specialities'));

        return redirect()->route('universities.index');
    }

    public function destroy($id)
    {
        $university = University::findOrFail($id);
        $university->delete();

        return redirect()->route('universities.index');
    }
}
