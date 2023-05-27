@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Vacancies</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="d-flex justify-content-end mb-3">
                                <a href="{{ route('vacancies.create') }}" class="btn btn-primary">Add Vacancy</a>
                            </div>
                            <table
                            class="table table-bordered table-hover dataTable dtr-inline collapsed"
                            aria-describedby="example2_info">
                            <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0"
                                        rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending">
                                        Name</th>
                                    <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1"
                                        aria-label="Description: activate to sort column ascending">Description</th>
                                    <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1"
                                        aria-label="Requirements: activate to sort column ascending">
                                        Requirements</th>
                                    <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1"
                                        aria-label="Salary: activate to sort column ascending">
                                        Salary</th>
                                    <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1"
                                        aria-label="Contact Info: activate to sort column ascending">
                                        Contact Info</th>
                                    <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1"
                                        aria-label="Employer: activate to sort column ascending">
                                        Employer</th>
                                    <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vacancies as $vacancy)
                                <tr>
                                    <td>{{ $vacancy->name }}</td>
                                    <td>{{ $vacancy->description }}</td>
                                    <td>{{ $vacancy->requirements }}</td>
                                    <td>{{ $vacancy->salary }}</td>
                                    <td>{{ $vacancy->contact_info }}</td>
                                    <td>{{ $vacancy->employer->name }}</td>
                                    <td>
                                        <a href="{{ route('vacancies.edit', $vacancy->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        <form action="{{ route('vacancies.destroy', $vacancy->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
