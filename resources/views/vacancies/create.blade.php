@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Vacancy</h1>
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
                            <form method="POST" action="{{ route('vacancies.store') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="requirements">Requirements</label>
                                    <input type="text" class="form-control" id="requirements" name="requirements">
                                </div>

                                <div class="form-group">
                                    <label for="salary">Salary</label>
                                    <input type="number" class="form-control" id="salary" name="salary">
                                </div>

                                <div class="form-group">
                                    <label for="Contact Info">Contact Info</label>
                                    <input type="text" class="form-control" id="contact_info" name="contact_info">
                                </div>

                                <div class="form-group">
                                    <label for="employer">Employer</label>
                                    <select class="form-control" id="employer_id" name="employer_id" required>
                                        <option value="Select Item" selected disabled>Select Item</option>
                                        @foreach ($employers as $id => $name)
                                            <option value="{{$id}}">{{$name}}</option>
                                        @endforeach
                                    </select>
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
