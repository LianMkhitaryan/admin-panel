<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResumeRequest;
use App\Models\Resume;
use App\Models\Graduate;
use Illuminate\Http\Request;

class ResumesController extends Controller
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
        $resumes = Resume::with('graduate')->get();
        return view('resumes.index', compact('resumes'));
    }

    public function create()
    {
        $graduates = Graduate::pluck('full_name', 'id');
        return view('resumes.create', compact('graduates'));
    }

    public function store(ResumeRequest $request)
    {
        $resume = new Resume();
        $resume->experience = $request->input('experience');
        $resume->skills = $request->input('skills');
        $resume->education = $request->input('education');
        $resume->courses = $request->input('courses');
        $resume->graduate_id = $request->input('graduate_id');
        $resume->save();
    
        return redirect()->route('resumes.index');   
    }

    public function edit($id)
    {
        $resume = Resume::findOrFail($id);
        $graduates = Graduate::pluck('full_name', 'id');
        return view('resumes.edit', compact('resume', 'graduates'));
    }

    public function update(ResumeRequest $request, $id)
    {
        $resume = Resume::findOrFail($id);
        $resume->experience = $request->input('experience');
        $resume->skills = $request->input('skills');
        $resume->education = $request->input('education');
        $resume->courses = $request->input('courses');
        $resume->graduate_id = $request->input('graduate_id');
        $resume->save();
    
        return redirect()->route('resumes.index'); 
    }

    public function destroy($id)
    {
        $resume = Resume::findOrFail($id);
        $resume->delete();
    
        return redirect()->route('resumes.index'); 
    }
}
