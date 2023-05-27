@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Employer</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                           <!-- Form to edit an existing Employer -->
                           <div class="card-body">
                            <form method="POST" action="{{ route('employers.update', $employer->id) }}">
                                @csrf
                                @method('PUT')
    
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $employer->name }}" required>
                                </div>
    
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description">{{ $employer->description }}</textarea>
                                </div>
    
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{ $employer->address }}">
                                </div>
    
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="phone" class="form-control" id="phone" name="phone" value="{{ $employer->phone }}">
                                </div>
    
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $employer->email }}" required>
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
