@extends('layouts.admin')

@section('title', 'Edit Portfolio')

@section('content')
    <div class="container mt-5">
        <h1>Edit Portfolio</h1>

        <!-- Portfolio Form -->
        <form action="/admin/portfolios/{{ $portfolio_id }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf

            <div class="mb-3 col-md-4">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $portfolio->title) }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description', $portfolio->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 col-md-4">
                <label for="tech_stack" class="form-label">Tech Stack</label>
                <input type="text" class="form-control @error('tech_stack') is-invalid @enderror" id="tech_stack"
                    name="tech_stack" value="{{ old('tech_stack', $portfolio->tech_stack) }}">
                @error('tech_stack')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 col-md-4">
                <label for="link" class="form-label">Link</label>
                <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link"
                    value="{{ old('link', $portfolio->link) }}">
                @error('link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 col-md-4">
                <label for="link_text" class="form-label">Link Text</label>
                <input type="text" class="form-control @error('link_text') is-invalid @enderror" id="link_text"
                    name="link_text" value="{{ old('link_text', $portfolio->link_text) }}">
                @error('link_text')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 col-md-4">
                <input type="hidden" name="oldImage" value="{{ $portfolio->image }}">
                <label for="image" class="form-label">Image</label>
                @if (Storage::exists('/' . $portfolio->image))
                    <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" width="250"
                        class="img-preview d-block img-fluid mb-3 col-sm-6">
                @elseif ($portfolio->image)
                    <img class="d-block img-preview img-fluid mb-3 col-sm-6" src="{{ $portfolio->image }}">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-6">
                @endif
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 col-md-4">
                <label for="type" class="form-label">Type</label>
                <select class="form-select @error('type') is-invalid @enderror" id="type" name="type">
                    <option value="" disabled selected>Select Type</option>
                    <option value="personal" {{ old('type', $portfolio->type) == 'personal' ? 'selected' : '' }}>
                        Personal</option>
                    <option value="professional" {{ old('type', $portfolio->type) == 'professional' ? 'selected' : '' }}>
                        Professional</option>
                </select>
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary mt-2">Edit Portfolio</button>
        </form>
    </div>
@endsection
