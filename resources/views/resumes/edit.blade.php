@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Resume</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                    <!-- Form to edit an existing Resume -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('resumes.update', $resume->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="experience">Experience</label>
                                <input type="text" class="form-control @error('experience') is-invalid @enderror" id="experience" name="experience" value="{{ old('experience') ?? $resume->experience }}">
                                @error('experience')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="skills">Skills</label>
                                <input type="text" class="form-control @error('skills') is-invalid @enderror" id="skills" name="skills" value="{{ old('skills') ?? $resume->skills }}">
                                @error('skills')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="education">Education</label>
                                <input type="text" class="form-control @error('education') is-invalid @enderror" id="education" name="education" value="{{ old('education') ?? $resume->education }}">
                                @error('education')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="courses">Courses</label>
                                <input type="text" class="form-control @error('courses') is-invalid @enderror" id="courses" name="courses" value="{{ old('courses') ?? $resume->courses }}">
                                @error('courses')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="graduate_id">Graduate</label>
                                <select class="form-control @error('graduate_id') is-invalid @enderror" id="graduate_id" name="graduate_id" required>
                                    @foreach ($graduates as $id => $full_name)
                                        <option value="{{ $id }}" @if($id === $resume->graduate_id) selected @endif>{{ $full_name }}</option>
                                    @endforeach
                                </select>
                                @error('graduate_id')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
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
