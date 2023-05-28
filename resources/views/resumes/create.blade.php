@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Resume</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <!-- Form to create a new Resume -->
                        <div class="card-body">
                            <form method="POST" action="{{ route('resumes.store') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="Experience">Experience</label>
                                    <input type="text" class="form-control @error('experience') is-invalid @enderror" id="experience" name="experience" value="{{ old('experience') }}">
                                    @error('experience')
                                        <span class="error invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="skills">Skills</label>
                                    <input type="text" class="form-control @error('skills') is-invalid @enderror" id="skills" name="skills" value="{{ old('skills') }}">
                                    @error('skills')
                                        <span class="error invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="education">Education</label>
                                    <input type="text" class="form-control @error('education') is-invalid @enderror" id="education" name="education" value="{{ old('education') }}">
                                    @error('education')
                                        <span class="error invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="courses">Courses</label>
                                    <input type="text" class="form-control @error('courses') is-invalid @enderror" id="courses" name="courses" value="{{ old('courses') }}">
                                    @error('courses')
                                        <span class="error invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="Graduate">Graduate</label>
                                    <select class="form-control @error('graduate_id') is-invalid @enderror" id="graduate_id" name="graduate_id" required>
                                        <option value="Select Item" selected disabled>Select Item</option>
                                        @foreach ($graduates as $id => $full_name)
                                            <option value="{{$id}}">{{$full_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('graduate_id')
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
