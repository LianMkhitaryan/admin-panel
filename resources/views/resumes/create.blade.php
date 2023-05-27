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
                                    <input type="text" class="form-control" id="experience" name="experience">
                                </div>

                                <div class="form-group">
                                    <label for="skills">Skills</label>
                                    <input type="text" class="form-control" id="skills" name="skills">
                                </div>

                                <div class="form-group">
                                    <label for="education">Education</label>
                                    <input type="text" class="form-control" id="education" name="education">
                                </div>

                                <div class="form-group">
                                    <label for="courses">Courses</label>
                                    <input type="text" class="form-control" id="courses" name="courses">
                                </div>

                                <div class="form-group">
                                    <label for="Graduate">Graduate</label>
                                    <select class="form-control" id="graduate_id" name="graduate_id" required>
                                        <option value="Select Item" selected disabled>Select Item</option>
                                        @foreach ($graduates as $id => $full_name)
                                            <option value="{{$id}}">{{$full_name}}</option>
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
