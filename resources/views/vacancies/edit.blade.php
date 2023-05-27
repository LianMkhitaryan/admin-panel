@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Vacancy</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                    <!-- Form to edit an existing Vacancy -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('vacancies.update', $vacancy->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $vacancy->name }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description">{{ $vacancy->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="requirements">Requirements</label>
                                <input type="text" class="form-control" id="requirements" name="requirements" value="{{ $vacancy->requirements }}">
                            </div>

                            <div class="form-group">
                                <label for="salary">Salary</label>
                                <input type="number" class="form-control" id="salary" name="salary" value="{{ $vacancy->salary }}">
                            </div>

                            <div class="form-group">
                                <label for="Contact Info">Contact Info</label>
                                <input type="text" class="form-control" id="contact_info" name="contact_info" value="{{ $vacancy->contact_info }}">
                            </div>

                            <div class="form-group">
                                <label for="employer">Employer</label>
                                <select class="form-control" id="employer_id" name="employer_id" required>
                                    @foreach ($employers as $id => $name)
                                        <option value="{{$id}}" @if($id === $vacancy->employer_id) selected @endif>{{$name}}</option>
                                    @endforeach
                                </select>
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
