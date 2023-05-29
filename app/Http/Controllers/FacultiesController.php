<?php

namespace App\Http\Controllers;

use App\Http\Requests\FacultyRequest;
use App\Models\Faculty;

class FacultiesController extends Controller
{
    public function index()
    {
        $faculties = Faculty::all();
        return view('faculties.index', compact('faculties'));
    }

    public function create()
    {
        return view('faculties.create');
    }

    public function store(FacultyRequest $request)
    {
        $faculty = new Faculty();
        $faculty->name = $request->input('name');
        $faculty->save();

        return redirect()->route('faculties.index');
    }

    public function edit($id)
    {
        $faculty = Faculty::findOrFail($id);
        return view('faculties.edit', compact('faculty'));
    }

    public function update(FacultyRequest $request, $id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->name = $request->input('name');
        $faculty->save();

        return redirect()->route('faculties.index');
    }

    public function destroy($id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->delete();

        return redirect()->route('faculties.index');
    }
}
