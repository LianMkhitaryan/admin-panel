@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Graduate</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                    <!-- Form to edit an existing Graduate -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('graduates.update', $graduate->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="full_name">Full Name</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $graduate->full_name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date" name="date" value="{{ $graduate->date }}">
                            </div>

                            <div class="form-group">
                                <label for="speciality">Speciality</label>
                                <input type="text" class="form-control" id="speciality" name="speciality" value="{{ $graduate->speciality }}">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{ $graduate->address }}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="phone" class="form-control" id="phone" name="phone" value="{{ $graduate->phone }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $graduate->email }}" required>
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
