@extends('layouts.admin')

@section('title', 'Edit Experience')

@section('content')
    <div class="container mt-5">
        <h1>Edit Experience</h1>

        <!-- Experience Form -->
        <form action="/admin/experiences/{{ $experience_id }}" method="post">
            @method('put')
            @csrf

            <div class="mb-3 col-md-4">
                <label for="company_name" class="form-label">Company Name</label>
                <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name" name="company_name"
                    value="{{ old('company_name', $experience->company_name) }}">
                @error('company_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 col-md-4">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control @error('image') is-invalid @enderror" id="image"
                    value="{{ old('image', $experience->image) }}" name="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description', $experience->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-2">Edit Experience</button>
        </form>
    </div>
@endsection
