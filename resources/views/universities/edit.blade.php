@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit University</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                    <!-- Form to edit an existing University -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('universities.update', $university->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $university->name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="abbreviation">Abbreviation</label>
                                <input type="text" class="form-control" id="abbreviation" name="abbreviation" value="{{ $university->abbreviation }}">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{ $university->address }}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="phone" class="form-control" id="phone" name="phone" value="{{ $university->phone }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $university->email }}" required>
                            </div>

                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="text" class="form-control" id="website" name="website" value="{{ $university->website }}">
                            </div>

                            <div class="form-group">
                                <label for="faculties">Faculties</label>
                                <input type="text" class="form-control" id="faculties" name="faculties" value="{{ $university->faculties }}">
                            </div>

                            <div class="form-group">
                                <label for="specialities">Specialities</label>
                                <input type="text" class="form-control" id="specialities" name="specialities" value="{{ $university->specialities }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
