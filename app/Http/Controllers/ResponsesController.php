<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResponseRequest;
use App\Models\Response;
use App\Models\Resume;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class ResponsesController extends Controller
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
        $responses = Response::with('resume', 'vacancy')->get();
        return view('responses.index', compact('responses'));
    }

    public function create()
    {
        $resumes = Resume::pluck('experience', 'id');
        $vacancies = Vacancy::pluck('name', 'id');
        return view('responses.create',compact('resumes', 'vacancies'));
    }

    public function store(ResponseRequest $request)
    {
        $response = new Response();
        $response->data = $request->input('data');
        $response->resume_id = $request->input('resume_id');
        $response->vacancy_id = $request->input('vacancy_id');
        $response->save();
    
        return redirect()->route('responses.index');   
    }

    public function edit($id)
    {
        $response = Response::findOrFail($id);
        $resumes = Resume::pluck('experience', 'id');
        $vacancies = Vacancy::pluck('name', 'id');
        return view('responses.edit', compact('response', 'resumes', 'vacancies'));
    }

    public function update(ResponseRequest $request, $id)
    {
        $response = Response::findOrFail($id);
        $response->data = $request->input('data');
        $response->resume_id = $request->input('resume_id');
        $response->vacancy_id = $request->input('vacancy_id');
        $response->save();
    
        return redirect()->route('responses.index'); 
    }

    public function destroy($id)
    {
        $response = Response::findOrFail($id);
        $response->delete();
    
        return redirect()->route('responses.index'); 
    }
}
