@extends('layouts.admin')

@section('title', 'Add Education')

@section('content')
    <div class="container mt-5">
        <h1>Add Education</h1>

        <!-- Education Form -->
        <form action="/admin/education" method="post">
            @csrf
            <div class="mb-3 col-md-4">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 col-md-4">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control @error('image') is-invalid @enderror" id="image"
                    value="{{ old('image') }}" name="image">
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
            <button type="submit" class="btn btn-primary mt-2">Add Education</button>
        </form>
    </div>
@endsection
