@extends('layouts.admin')

@section('title', 'Portfolio')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Portfolio</h1>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($portfolios as $portfolio)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $portfolio->title }}</td>
                            <td><img src="{{ $portfolio->image }}" alt="{{ $portfolio->title }}" width="250"></td>
                            <td>{{ $portfolio->type }}</td>
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
