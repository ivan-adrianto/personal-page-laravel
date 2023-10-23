@extends('layouts.admin')

@section('title', 'Experience')

@section('content')
    <div class="container mt-5">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="d-flex justify-content-between">
            <h1 class="mb-4">Experience</h1>
            <a href="/admin/experiences/create">
                <button class="btn btn-primary px-4">
                    <i class="fa-solid fa-plus me-2"></i>
                    Add new</button>
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Company</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($experiences as $experience)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $experience->company_name }}</td>
                            <td>
                                @if (Storage::exists('/' . $experience->image))
                                    <img src="{{ asset('storage/' . $experience->image) }}" alt="{{ $experience->company_name }}"
                                        width="250">
                                @else
                                    <img src="{{ $experience->image }}" alt="{{ $experience->company_name }}" width="250">
                                @endif
                            </td>
                            <td>
                                <a href="/admin/experiences/{{ $experience->id }}" class="text-decoration-none">
                                    <button type="button" class="btn btn-primary me-3">
                                        <i class="fa-regular fa-pen-to-square "></i>
                                    </button>
                                </a>

                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop" data-item-id="{{ $experience->id }}"
                                    data-item-name="{{ $experience->company_name }}" data-link="/admin/experiences/">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('partials.modal')
@endsection
