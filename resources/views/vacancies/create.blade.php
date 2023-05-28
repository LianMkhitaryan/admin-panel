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
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="error invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="error invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="requirements">Requirements</label>
                                    <input type="text" class="form-control @error('requirements') is-invalid @enderror" id="requirements" name="requirements" value="{{ old('requirements') }}">
                                    @error('requirements')
                                        <span class="error invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="salary">Salary</label>
                                    <input type="number" class="form-control @error('salary') is-invalid @enderror" id="salary" name="salary" value="{{ old('salary') }}">
                                    @error('salary')
                                        <span class="error invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="Contact Info">Contact Info</label>
                                    <input type="text" class="form-control @error('contact_info') is-invalid @enderror" id="contact_info" name="contact_info" value="{{ old('contact_info') }}">
                                    @error('contact_info')
                                        <span class="error invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="employer">Employer</label>
                                    <select class="form-control @error('employer_id') is-invalid @enderror" id="employer_id" name="employer_id" required>
                                        <option value="Select Item" selected disabled>Select Item</option>
                                        @foreach ($employers as $id => $name)
                                            <option value="{{$id}}">{{$name}}</option>
                                        @endforeach
                                    </select>
                                    @error('employer_id')
                                        <span class="error invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
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
