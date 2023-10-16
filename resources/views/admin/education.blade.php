@extends('layouts.admin')

@section('title', 'Education')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Education</h1>
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
                    <td><img src="{{ $education->image }}" alt="{{ $education->title }}" width="250"></td>
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