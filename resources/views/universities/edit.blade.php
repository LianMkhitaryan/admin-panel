@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit University</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                    <!-- Form to edit an existing University -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('universities.update', $university->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $university->name }}" required>
                                @error('name')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="abbreviation">Abbreviation</label>
                                <input type="text" class="form-control @error('abbreviation') is-invalid @enderror" id="abbreviation" name="abbreviation" value="{{ old('abbreviation') ?? $university->abbreviation }}">
                                @error('abbreviation')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') ?? $university->address }}">
                                @error('address')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') ?? $university->phone }}">
                                @error('phone')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') ?? $university->email }}" required>
                                @error('email')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" name="website" value="{{ old('website') ?? $university->website }}">
                                @error('website')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="faculties">Faculties</label>
                                <input type="text" class="form-control @error('faculties') is-invalid @enderror" id="faculties" name="faculties" value="{{ old('faculties') ?? $university->faculties }}">
                                @error('faculties')
                                    <span class="error invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="specialities">Specialities</label>
                                <input type="text" class="form-control @error('specialities') is-invalid @enderror" id="specialities" name="specialities" value="{{ old('specialities') ?? $university->specialities }}">
                                @error('specialities')
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
