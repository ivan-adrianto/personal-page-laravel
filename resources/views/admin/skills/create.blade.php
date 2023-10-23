@extends('layouts.admin')

@section('title', 'Add New Skill')

@section('content')
    <div class="container mt-5">
        <h1>Add New Skill</h1>

        <!-- Skill Form -->
        <form action="/admin/skills" method="post" enctype="multipart/form-data">
            @csrf

            <!-- Skill Name -->
            <div class="mb-3 col-md-4">
                <label for="name" class="form-label">Skill Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Image -->
            <div class="mb-3 col-md-4">
                <label for="image" class="form-label">Image</label>
                <img class="img-preview img-fluid mb-3 col-sm-6">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Stack -->
            <div class="mb-3 col-md-4">
                <label for="stack" class="form-label">Stack</label>
                <select class="form-select @error('stack_id') is-invalid @enderror" id="stack" name="stack_id">
                    <option value="" disabled selected>Select Stack</option>
                    @foreach ($stacks as $stack)
                        <option value="{{ $stack->id }}" {{ old('stack_id') == $stack->id ? 'selected' : '' }}>
                            {{ $stack->name }}</option>
                    @endforeach
                </select>
                @error('stack_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary mt-2">Add Skill</button>
        </form>
    </div>
@endsection
