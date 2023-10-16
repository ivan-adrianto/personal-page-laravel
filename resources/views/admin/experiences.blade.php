@extends('layouts.admin')

@section('title', 'Experience')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Experience</h1>
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
                    <td><img src="{{ $experience->image }}" alt="{{ $experience->title }}" width="250"></td>
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