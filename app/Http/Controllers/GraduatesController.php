<?php

namespace App\Http\Controllers;

use App\Http\Requests\GraduateRequest;
use App\Models\Graduate;
use Illuminate\Http\Request;

class GraduatesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $graduates = Graduate::all();
        return view('graduates.index', compact('graduates'));
    }

    public function create()
    {
        return view('graduates.create');
    }

    public function store(GraduateRequest $request)
    {
        $graduate = new Graduate();
        $graduate->full_name = $request->input('full_name');
        $graduate->date = $request->input('date');
        $graduate->speciality = $request->input('speciality');
        $graduate->address = $request->input('address');
        $graduate->phone = $request->input('phone');
        $graduate->email = $request->input('email');
        $graduate->save();
    
        return redirect()->route('graduates.index');   
    }

    public function edit($id)
    {
        $graduate = Graduate::findOrFail($id);
        return view('graduates.edit', compact('graduate'));
    }

    public function update(GraduateRequest $request, $id)
    {
        $graduate = Graduate::findOrFail($id);
        $graduate->full_name = $request->input('full_name');
        $graduate->date = $request->input('date');
        $graduate->speciality = $request->input('speciality');
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

