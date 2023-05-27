@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Responce</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                    <!-- Form to edit an existing Response -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('responses.update', $response->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="data">Data</label>
                                <input type="text" class="form-control" id="data" name="data" value="{{ $response->data }}">
                            </div>

                            <div class="form-group">
                                <label for="resume_id">Resume</label>
                                <select class="form-control" id="resume_id" name="resume_id" required>
                                    <option value="Select Item" selected disabled>Select Item</option>
                                    @foreach ($resumes as $id => $experience)
                                        <option value="{{ $id }}" @if($id === $response->resume_id) selected @endif>{{ $experience }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="vacancy_id">Vacancy</label>
                                <select class="form-control" id="vacancy_id" name="vacancy_id" required>
                                    <option value="Select Item" selected disabled>Select Item</option>
                                    @foreach ($vacancies as $id => $name)
                                        <option value="{{ $id }}" @if($id === $response->vacancy_id) selected @endif>{{ $name }}</option>
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
