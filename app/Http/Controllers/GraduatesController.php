<?php

namespace App\Http\Controllers;

use App\Http\Requests\GraduateRequest;
use App\Models\Graduate;
use App\Models\Speciality;

class GraduatesController extends Controller
{
    public function index()
    {
        $graduates = Graduate::all();
        return view('graduates.index', compact('graduates'));
    }

    public function create()
    {
        $specialities = Speciality::pluck('name', 'id');
        return view('graduates.create', compact('specialities'));
    }

    public function store(GraduateRequest $request)
    {
        $graduate = new Graduate();
        $graduate->full_name = $request->input('full_name');
        $graduate->date = $request->input('date');
        $graduate->speciality_id = $request->input('speciality_id');
        $graduate->address = $request->input('address');
        $graduate->phone = $request->input('phone');
        $graduate->email = $request->input('email');
        $graduate->save();

        return redirect()->route('graduates.index');
    }

    public function edit($id)
    {
        $graduate = Graduate::findOrFail($id);
        $specialities = Speciality::pluck('name', 'id');
        return view('graduates.edit', compact(
            'graduate',
            'specialities'
        ));
    }

    public function update(GraduateRequest $request, $id)
    {
        $graduate = Graduate::findOrFail($id);
        $graduate->full_name = $request->input('full_name');
        $graduate->date = $request->input('date');
        $graduate->speciality_id = $request->input('speciality_id');
        $graduate->address = $request->input('address');
        $graduate->phone = $request->input('phone');
        $graduate->email = $request->input('email');
        $graduate->save();

        return redirect()->route('graduates.index');
    }

    public function destroy($id)
    {
        $graduate = Graduate::findOrFail($id);
        $graduate->delete();

        return redirect()->route('graduates.index');
    }
}
