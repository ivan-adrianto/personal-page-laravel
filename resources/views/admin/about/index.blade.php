@extends('layouts.admin')

@section('title', 'About')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-4">
            <div>
                <h1>About</h1>
            </div>
            <button class="btn btn-primary px-5">
                <i class="fa-regular fa-pen-to-square"></i>
                Edit</button>
        </div>

        <!-- Title Section -->
        <div class="mb-4">
            <h3>Title</h3>
            {!! $about->title !!}
        </div>

        <!-- Lead Section -->
        <div class="mb-4">
            <h3>Lead</h3>
            {!! $about->lead !!}
        </div>

        <!-- Content Section -->
        <div class="mb-4">
            <h3>Content</h3>
            {!! $about->content !!}
        </div>

        <!-- Links Section -->
        <div class="mb-4">
            <h3>Links</h3>
            <ul class="list-unstyled">
                @foreach ($links as $link)
                    <p>{{ $link['name'] }}: <span>
                            <a href="{{ $link['link'] }}"><span>{{ $link['link'] }}</span></a>
                        </span> </p>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
