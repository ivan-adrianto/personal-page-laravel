@extends('layouts.admin')

@section('title', 'Skills')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-4">
            <h1>Skills</h1>
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
                                <i class="fa-regular fa-pen-to-square me-3" role="button"></i>
                                <i class="fa-solid fa-trash" role="button"></i>
                            </td>
                        </tr>
                    @endforeach
                    <!-- Add more rows for each skill -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
