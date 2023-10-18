@extends('layouts.admin')

@section('title', 'Edit Skill')

@section('content')
    <div class="container mt-5">
        <h1>Edit Skill</h1>

        <!-- Skill Form -->
        <form action="/admin/skills/{{ $skill_id }}" method="post">
            @method('put')
            @csrf

            <!-- Skill Name -->
            <div class="mb-3 col-md-4">
                <label for="name" class="form-label">Skill Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name') ? old('name') : $skill->name }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Image URL -->
            <div class="mb-3 col-md-4">
                <label for="image" class="form-label">Image URL</label>
                <input type="text" class="form-control @error('image') is-invalid @enderror" id="image"
                    value="{{ old('image') ? old('image') : $skill->image }}" name="image">
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
                        @if (old('stack_id') == $stack->id)
                            <option value="{{ $stack->id }}" selected>{{ $stack->name }}</option>
                        @elseif ($skill->stack_id == $stack->id)
                            <option value="{{ $stack->id }}" selected>{{ $stack->name }}</option>
                        @else
                            <option value="{{ $stack->id }}">{{ $stack->name }}</option>
                        @endif
                    @endforeach
                </select>
                @error('stack_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary mt-2">Edit Skill</button>
        </form>
    </div>
@endsection
