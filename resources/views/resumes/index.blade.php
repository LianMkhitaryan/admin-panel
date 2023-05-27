@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Resumes</h1>
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
                                <a href="{{ route('resumes.create') }}" class="btn btn-primary">Add Resume</a>
                            </div>
                            <table
                            class="table table-bordered table-hover dataTable dtr-inline collapsed"
                            aria-describedby="example2_info">
                            <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0"
                                        rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Experience: activate to sort column descending">
                                        Experience</th>
                                    <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1"
                                        aria-label="Skills: activate to sort column ascending">Skills</th>
                                    <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1"
                                        aria-label="Education: activate to sort column ascending">
                                        Education</th>
                                    <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1"
                                        aria-label="Courses: activate to sort column ascending">
                                        Courses</th>
                                    <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1"
                                        aria-label="Graduate: activate to sort column ascending">
                                        Graduate</th>
                                    <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($resumes as $resume)
                                <tr>
                                    <td>{{ $resume->experience }}</td>
                                    <td>{{ $resume->skills }}</td>
                                    <td>{{ $resume->education }}</td>
                                    <td>{{ $resume->courses }}</td>
                                    <td>{{ $resume->graduate->full_name }}</td>
                                    <td>
                                        <a href="{{ route('resumes.edit', $resume->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        <form action="{{ route('resumes.destroy', $resume->id) }}" method="POST" style="display: inline-block;">
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
