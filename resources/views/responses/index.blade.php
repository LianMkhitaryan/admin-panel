@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Responses</h1>
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
                                <a href="{{ route('responses.create') }}" class="btn btn-primary">Add Response</a>
                            </div>
                            <table
                            class="table table-bordered table-hover dataTable dtr-inline collapsed"
                            aria-describedby="example2_info">
                            <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0"
                                        rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Data: activate to sort column descending">
                                        Data</th>
                                    <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1"
                                        aria-label="Resume: activate to sort column ascending">Resume</th>
                                        <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1"
                                        aria-label="Vacancy: activate to sort column ascending">
                                        Vacancy</th>
                                        <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($responses as $response)
                                <tr>
                                    <td>{{ $response->data }}</td>
                                    <td>{{ $response->resume->experience }}</td>
                                    <td>{{ $response->vacancy->name }}</td>
                                    <td>
                                        <a href="{{ route('responses.edit', $response->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        <form action="{{ route('responses.destroy', $response->id) }}" method="POST" style="display: inline-block;">
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
