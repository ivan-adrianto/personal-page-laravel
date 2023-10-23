@extends('layouts.admin')

@section('title', 'Education')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <h1 class="mb-4">Education</h1>
            <a href="/admin/education/create">
                <button class="btn btn-primary px-4">
                    <i class="fa-solid fa-plus me-2"></i>
                    Add new</button>
            </a>
        </div>
        <div class="d-flex justify-content-center">
            @if (session()->has('success'))
                <div class="alert alert-success col-md-4" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($educations as $education)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $education->title }}</td>
                            <td>
                                @if (Storage::exists('/' . $education->image))
                                    <img src="{{ asset('storage/' . $education->image) }}" alt="{{ $education->title }}"
                                        width="100">
                                @else
                                    <img src="{{ $education->image }}" alt="{{ $education->title }}" width="100">
                                @endif
                            </td>
                            <td>
                                <a href="/admin/education/{{ $education->id }}" class="text-decoration-none">
                                    <button type="button" class="btn btn-primary me-3">
                                        <i class="fa-regular fa-pen-to-square "></i>
                                    </button>
                                </a>

                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop" data-item-id="{{ $education->id }}"
                                    data-item-name="{{ $education->title }}" data-link="/admin/education/">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    <!-- Add more rows for each skill -->
                </tbody>
            </table>
        </div>
    </div>
    @include('partials.modal')
@endsection
