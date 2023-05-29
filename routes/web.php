<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniversitiesController;
use App\Http\Controllers\GraduatesController;
use App\Http\Controllers\ResumesController;
use App\Http\Controllers\EmployersController;
use App\Http\Controllers\VacanciesController;
use App\Http\Controllers\ResponsesController;
use App\Http\Controllers\FacultiesController;
use App\Http\Controllers\SpecialitiesController;

Route::get('/', function () {
    return redirect(route('universities.index'));
});

Route::middleware(['auth'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    |Universities
    |--------------------------------------------------------------------------
    */
    Route::get('/universities', [UniversitiesController::class, 'index'])->name('universities.index');
    Route::get('/universities/create', [UniversitiesController::class, 'create'])->name('universities.create');
    Route::post('/universities', [UniversitiesController::class, 'store'])->name('universities.store');
    Route::get('/universities/{id}/edit', [UniversitiesController::class, 'edit'])->name('universities.edit');
    Route::put('/universities/{id}', [UniversitiesController::class, 'update'])->name('universities.update');
    Route::delete('/universities/{id}', [UniversitiesController::class, 'destroy'])->name('universities.destroy');

    /*
    |--------------------------------------------------------------------------
    |Graduates
    |--------------------------------------------------------------------------
    */
    Route::get('/graduates', [GraduatesController::class, 'index'])->name('graduates.index');
    Route::get('/graduates/create', [GraduatesController::class, 'create'])->name('graduates.create');
    Route::post('/graduates', [GraduatesController::class, 'store'])->name('graduates.store');
    Route::get('/graduates/{id}/edit', [GraduatesController::class, 'edit'])->name('graduates.edit');
    Route::put('/graduates/{id}', [GraduatesController::class, 'update'])->name('graduates.update');
    Route::delete('/graduates/{id}', [GraduatesController::class, 'destroy'])->name('graduates.destroy');

    /*
    |--------------------------------------------------------------------------
    |Resumes
    |--------------------------------------------------------------------------
    */
    Route::get('/resumes', [ResumesController::class, 'index'])->name('resumes.index');
    Route::get('/resumes/create', [ResumesController::class, 'create'])->name('resumes.create');
    Route::post('/resumes', [ResumesController::class, 'store'])->name('resumes.store');
    Route::get('/resumes/{id}/edit', [ResumesController::class, 'edit'])->name('resumes.edit');
    Route::put('/resumes/{id}', [ResumesController::class, 'update'])->name('resumes.update');
    Route::delete('/resumes/{id}', [ResumesController::class, 'destroy'])->name('resumes.destroy');

    /*
    |--------------------------------------------------------------------------
    |Employers
    |--------------------------------------------------------------------------
    */
    Route::get('/employers', [EmployersController::class, 'index'])->name('employers.index');
    Route::get('/employers/create', [EmployersController::class, 'create'])->name('employers.create');
    Route::post('/employers', [EmployersController::class, 'store'])->name('employers.store');
    Route::get('/employers/{id}/edit', [EmployersController::class, 'edit'])->name('employers.edit');
    Route::put('/employers/{id}', [EmployersController::class, 'update'])->name('employers.update');
    Route::delete('/employers/{id}', [EmployersController::class, 'destroy'])->name('employers.destroy');

    /*
    |--------------------------------------------------------------------------
    |Vacancies
    |--------------------------------------------------------------------------
    */
    Route::get('/vacancies', [VacanciesController::class, 'index'])->name('vacancies.index');
    Route::get('/vacancies/create', [VacanciesController::class, 'create'])->name('vacancies.create');
    Route::post('/vacancies', [VacanciesController::class, 'store'])->name('vacancies.store');
    Route::get('/vacancies/{id}/edit', [VacanciesController::class, 'edit'])->name('vacancies.edit');
    Route::put('/vacancies/{id}', [VacanciesController::class, 'update'])->name('vacancies.update');
    Route::delete('/vacancies/{id}', [VacanciesController::class, 'destroy'])->name('vacancies.destroy');

    /*
    |--------------------------------------------------------------------------
    |Responses
    |--------------------------------------------------------------------------
    */
    Route::get('/responses', [ResponsesController::class, 'index'])->name('responses.index');
    Route::get('/responses/create', [ResponsesController::class, 'create'])->name('responses.create');
    Route::post('/responses', [ResponsesController::class, 'store'])->name('responses.store');
    Route::get('/responses/{id}/edit', [ResponsesController::class, 'edit'])->name('responses.edit');
    Route::put('/responses/{id}', [ResponsesController::class, 'update'])->name('responses.update');
    Route::delete('/responses/{id}', [ResponsesController::class, 'destroy'])->name('responses.destroy');

    /*
    |--------------------------------------------------------------------------
    |Faculties
    |--------------------------------------------------------------------------
    */
    Route::get('/faculties', [FacultiesController::class, 'index'])->name('faculties.index');
    Route::get('/faculties/create', [FacultiesController::class, 'create'])->name('faculties.create');
    Route::post('/faculties', [FacultiesController::class, 'store'])->name('faculties.store');
    Route::get('/faculties/{id}/edit', [FacultiesController::class, 'edit'])->name('faculties.edit');
    Route::put('/faculties/{id}', [FacultiesController::class, 'update'])->name('faculties.update');
    Route::delete('/faculties/{id}', [FacultiesController::class, 'destroy'])->name('faculties.destroy');

    /*
    |--------------------------------------------------------------------------
    |Specialities
    |--------------------------------------------------------------------------
    */
    Route::get('/specialities', [SpecialitiesController::class, 'index'])->name('specialities.index');
    Route::get('/specialities/create', [SpecialitiesController::class, 'create'])->name('specialities.create');
    Route::post('/specialities', [SpecialitiesController::class, 'store'])->name('specialities.store');
    Route::get('/specialities/{id}/edit', [SpecialitiesController::class, 'edit'])->name('specialities.edit');
    Route::put('/specialities/{id}', [SpecialitiesController::class, 'update'])->name('specialities.update');
    Route::delete('/specialities/{id}', [SpecialitiesController::class, 'destroy'])->name('specialities.destroy');

});

Auth::routes();
