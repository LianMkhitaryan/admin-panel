<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployerRequest;
use App\Models\Employer;

class EmployersController extends Controller
{
    public function index()
    {
        $employers = Employer::all();
        return view('employers.index', compact('employers'));
    }

    public function create()
    {
        return view('employers.create');
    }

    public function store(EmployerRequest $request)
    {
        $employer = new Employer();
        $employer->name = $request->input('name');
        $employer->description = $request->input('description');
        $employer->address = $request->input('address');
        $employer->phone = $request->input('phone');
        $employer->email = $request->input('email');
        $employer->save();

        return redirect()->route('employers.index');
    }

    public function edit($id)
    {
        $employer = Employer::findOrFail($id);
        return view('employers.edit', compact('employer'));
    }

    public function update(EmployerRequest $request, $id)
    {
        $employer = Employer::findOrFail($id);
        $employer->name = $request->input('name');
        $employer->description = $request->input('description');
        $employer->address = $request->input('address');
        $employer->phone = $request->input('phone');
        $employer->email = $request->input('email');
        $employer->save();

        return redirect()->route('employers.index');
    }

    public function destroy($id)
    {
        $employer = Employer::findOrFail($id);
        $employer->delete();

        return redirect()->route('employers.index');
    }
}
