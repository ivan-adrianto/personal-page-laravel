@extends('layouts.admin')

@section('title', 'Add Experience')

@section('content')
    <div class="container mt-5">
        <h1>Add Experience</h1>

        <!-- Experience Form -->
        <form action="/admin/experiences" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 col-md-4">
                <label for="company_name" class="form-label">Company Name</label>
                <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name"
                    name="company_name" value="{{ old('company_name') }}">
                @error('company_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 col-md-4">
                <label for="image" class="form-label">Image</label>
                <img class="img-preview img-fluid mb-3 col-sm-6">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-2">Add Experience</button>
        </form>
    </div>
@endsection
