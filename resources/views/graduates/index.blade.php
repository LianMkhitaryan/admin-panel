@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Graduates</h1>
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
                                <a href="{{ route('graduates.create') }}" class="btn btn-primary">Add Graduate</a>
                            </div>
                            <table
                            class="table table-bordered table-hover dataTable dtr-inline collapsed"
                            aria-describedby="example2_info">
                            <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0"
                                        rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Full Name: activate to sort column descending">
                                        Full Name</th>
                                    <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1"
                                        aria-label="Date: activate to sort column ascending">Date</th>
                                    <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1"
                                        aria-label="Speciality: activate to sort column ascending">
                                        Speciality</th>
                                        <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1"
                                        aria-label="Address: activate to sort column ascending">
                                        Address</th>
                                    <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1"
                                        aria-label="Phone: activate to sort column ascending">
                                        Phone</th>
                                    <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1"
                                        aria-label="Email: activate to sort column ascending">
                                        Email</th>
                                        <th class="sorting" tabindex="0"
                                        rowspan="1" colspan="1">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($graduates as $graduate)
                                <tr>
                                    <td>{{ $graduate->full_name }}</td>
                                    <td>{{ $graduate->date }}</td>
                                    <td>{{ $graduate->speciality }}</td>
                                    <td>{{ $graduate->address }}</td>
                                    <td>{{ $graduate->phone }}</td>
                                    <td>{{ $graduate->email }}</td>
                                    <td>
                                        <a href="{{ route('graduates.edit', $graduate->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        <form action="{{ route('graduates.destroy', $graduate->id) }}" method="POST" style="display: inline-block;">
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
