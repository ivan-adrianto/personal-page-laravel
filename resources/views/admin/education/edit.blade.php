@extends('layouts.admin')

@section('title', 'Edit Education')

@section('content')
    <div class="container mt-5">
        <h1>Edit Education</h1>

        <!-- Education Form -->
        <form action="/admin/education/{{ $education_id }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf

            <div class="mb-3 col-md-4">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $education->title) }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 col-md-4">
                <input type="hidden" name="oldImage" value="{{ $education->image }}">
                <label for="image" class="form-label">Image</label>
                @if (Storage::exists('/' . $education->image))
                    <img src="{{ asset('storage/' . $education->image) }}" alt="{{ $education->title }}" width="250"
                        class="img-preview d-block img-fluid mb-3 col-sm-6">
                @elseif ($education->image)
                    <img class="d-block img-preview img-fluid mb-3 col-sm-6" src="{{ $education->image }}">
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
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description', $education->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-2">Edit Education</button>
        </form>
    </div>
@endsection
