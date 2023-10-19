@extends('layouts.admin')

@section('title', 'Skills')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-4">
            <h1>Skills</h1>
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <a href="/admin/skills/create">
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
                        <th>Name</th>
                        <th>Image</th>
                        <th>Stack</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skills as $skill)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $skill->name }}</td>
                            <td><img src="{{ $skill->image }}" alt="{{ $skill->name }}" width="30"></td>
                            <td>{{ $skill->stack->name }}</td>
                            <td>
                                <a href="/admin/skills/{{ $skill->id }}" class="text-decoration-none">
                                    <button type="button" class="btn btn-primary me-3">
                                        <i class="fa-regular fa-pen-to-square "></i>
                                    </button>
                                </a>

                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop" data-item-id="{{ $skill->id }}"
                                    data-item-name="{{ $skill->name }}" data-link="/admin/skills/">
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
