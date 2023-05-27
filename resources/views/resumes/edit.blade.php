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
                                <input type="text" class="form-control" id="experience" name="experience" value="{{ $resume->experience }}">
                            </div>

                            <div class="form-group">
                                <label for="skills">Skills</label>
                                <input type="text" class="form-control" id="skills" name="skills" value="{{ $resume->skills }}">
                            </div>

                            <div class="form-group">
                                <label for="education">Education</label>
                                <input type="text" class="form-control" id="education" name="education" value="{{ $resume->education }}">
                            </div>

                            <div class="form-group">
                                <label for="courses">Courses</label>
                                <input type="text" class="form-control" id="courses" name="courses" value="{{ $resume->courses }}">
                            </div>

                            <div class="form-group">
                                <label for="graduate_id">Graduate</label>
                                <select class="form-control" id="graduate_id" name="graduate_id" required>
                                    @foreach ($graduates as $id => $full_name)
                                        <option value="{{ $id }}" @if($id === $resume->graduate_id) selected @endif>{{ $full_name }}</option>
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
