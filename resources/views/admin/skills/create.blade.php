@extends('layouts.admin')

@section('title', 'Add New Skill')

@section('content')
    <div class="container mt-5">
        <h1>Add New Skill</h1>

        <!-- Skill Form -->
        <form method="post">
            @csrf

            <!-- Skill Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Skill Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <!-- Image URL -->
            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="image" name="image" required>
            </div>

            <!-- Stack -->
            <div class="mb-3">
                <label for="stack" class="form-label">Stack</label>
                <select class="form-select" id="stack" name="stack_id" required>
                    <option value="" disabled selected>Select Stack</option>
                    {{-- @foreach ($stacks as $stack)
                        <option value="{{ $stack->id }}">{{ $stack->name }}</option>
                    @endforeach --}}
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Add Skill</button>
        </form>
    </div>
@endsection
