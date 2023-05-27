<?php

namespace App\Http\Controllers;

use App\Http\Requests\VacancyRequest;
use App\Models\Vacancy;
use App\Models\Employer;

class VacanciesController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::with('employer')->get();
        return view('vacancies.index', compact('vacancies'));
    }

    public function create()
    {
        $employers = Employer::pluck('name', 'id');
        return view('vacancies.create',  compact('employers'));
    }

    public function store(VacancyRequest $request)
    {
        $vacancy = new Vacancy();
        $vacancy->name = $request->input('name');
        $vacancy->description = $request->input('description');
        $vacancy->requirements = $request->input('requirements');
        $vacancy->salary = $request->input('salary');
        $vacancy->contact_info = $request->input('contact_info');
        $vacancy->employer_id = $request->input('employer_id');
        $vacancy->save();

        return redirect()->route('vacancies.index');
    }

    public function edit($id)
    {
        $vacancy = Vacancy::findOrFail($id);
        $employers = Employer::pluck('name', 'id');
        return view('vacancies.edit', compact('vacancy', 'employers'));
    }

    public function update(VacancyRequest $request, $id)
    {
        $vacancy = Vacancy::findOrFail($id);
        $vacancy->name = $request->input('name');
        $vacancy->description = $request->input('description');
        $vacancy->requirements = $request->input('requirements');
        $vacancy->salary = $request->input('salary');
        $vacancy->contact_info = $request->input('contact_info');
        $vacancy->employer_id = $request->input('employer_id');
        $vacancy->save();

        return redirect()->route('vacancies.index');
    }

    public function destroy($id)
    {
        $vacancy = Vacancy::findOrFail($id);
        $vacancy->delete();

        return redirect()->route('vacancies.index');
    }
}
