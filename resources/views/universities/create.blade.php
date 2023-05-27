@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create University</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <!-- Form to create a new University -->
                        <div class="card-body">
                            <form method="POST" action="{{ route('universities.store') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <div class="form-group">
                                    <label for="abbreviation">Abbreviation</label>
                                    <input type="text" class="form-control" id="abbreviation" name="abbreviation">
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="phone" class="form-control" id="phone" name="phone">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" class="form-control" id="website" name="website">
                                </div>

                                <div class="form-group">
                                    <label for="faculties">Faculties</label>
                                    <input type="text" class="form-control" id="faculties" name="faculties">
                                </div>

                                <div class="form-group">
                                    <label for="specialities">Specialities</label>
                                    <input type="text" class="form-control" id="specialities" name="specialities">
                                </div>

                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
