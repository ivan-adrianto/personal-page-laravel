@extends('layouts.admin')

@section('title', 'Edit About')

@section('content')
    <div class="container mt-5">
        <h1>Edit About</h1>

        <!-- Display success message if any -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- About Form -->
        <form action="/admin/about" method="post">
            @method('put')
            @csrf

            <!-- About section -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $about->title) }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Lead section -->
            <div class="mb-3">
                <label for="lead" class="form-label">Lead</label>
                <input type="text" class="form-control @error('lead') is-invalid @enderror" id="lead" name="lead"
                    value="{{ old('lead', $about->lead) }}">
                @error('lead')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Content section -->
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content">{{ old('content', $about->content) }}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Links section -->
            <h3 class="mb-3 mt-5">Links</h3>
            @foreach (json_decode($about->links) as $index => $link)
                <div class="mb-5">
                    <h5 class="text-bold">{{ $link->name }}</h5>
                    <div class="mb-3">
                        <label for="link_name_{{ $index }}" class="form-label">Link Name</label>
                        <input type="text" class="form-control @error('links.' . $index . '.name') is-invalid @enderror"
                            id="link_name_{{ $index }}" name="links[{{ $index }}][name]"
                            value="{{ old('links.' . $index . '.name', $link->name) }}">
                        <label for="link_url_{{ $index }}" class="form-label mt-2">Link URL</label>
                        <input type="text" class="form-control" id="link_url_{{ $index }}"
                            name="links[{{ $index }}][link]" value="{{ $link->link }}">
                    </div>
                </div>
            @endforeach

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary mb-4">Update About</button>
        </form>
    </div>
@endsection
