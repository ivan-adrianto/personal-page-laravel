@extends('layouts.admin')

@section('title', 'Edit Experience')

@section('content')
    <div class="container mt-5">
        <h1>Edit Experience</h1>

        <!-- Experience Form -->
        <form action="/admin/experiences/{{ $experience_id }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf

            <div class="mb-3 col-md-4">
                <label for="company_name" class="form-label">Company Name</label>
                <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name"
                    name="company_name" value="{{ old('company_name', $experience->company_name) }}">
                @error('company_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Image URL -->
            <div class="mb-3 col-md-4">
                <input type="hidden" name="oldImage" value="{{ $experience->image }}">
                <label for="image" class="form-label">Image</label>
                @if (Storage::exists('/' . $experience->image))
                    <img src="{{ asset('storage/' . $experience->image) }}" alt="{{ $experience->company_name }}" width="250"
                        class="img-preview d-block img-fluid mb-3 col-sm-6">
                @elseif ($experience->image)
                    <img class="d-block img-preview img-fluid mb-3 col-sm-6" src="{{ $experience->image }}">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-6">
                @endif
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
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
