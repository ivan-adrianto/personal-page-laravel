@extends('layouts.admin')

@section('title', 'Portfolio')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-4">
            <h1>Portfolios</h1>
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <a href="/admin/portfolios/create">
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
                                <a href="/admin/portfolios/{{ $portfolio->id }}" class="text-decoration-none">
                                    <button type="button" class="btn btn-primary me-3">
                                        <i class="fa-regular fa-pen-to-square "></i>
                                    </button>
                                </a>

                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop" data-item-id="{{ $portfolio->id }}"
                                    data-item-name="{{ $portfolio->title }}" data-link="/admin/portfolios/">
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
