@extends('layouts.main')
@section('container')
    <div class="container">
        @foreach ($portfolios as $portfolio)
            <div class="portfolio-category">
                <a href="portfolio/{{ $portfolio["type"] }}">
                    <h1>{!! $portfolio["title"] !!}</h1>
                </a>
                <div class="row">
                    <a href="portfolio/{{ $portfolio["type"] }}" class="col-12 col-lg-4">
                        <img class="portfolio-thumbnail" src="img/portfolio/vcg-marketplace.png" alt="vcg-marketplace">
                    </a>
                    <a href="portfolio/{{ $portfolio["type"] }}" class="col-12 col-lg-4">
                        <img class="portfolio-thumbnail" src="img/portfolio/vcg-token.png" alt="vcg-token">
                    </a>
                    <a href="portfolio/{{ $portfolio["type"] }}" class="col-12 col-lg-4">
                        <img class="portfolio-thumbnail" src="img/portfolio/batumbu.png" alt="batumbu">
                    </a>
                </div>
            </div>
        @endforeach
        {{-- <div class="portfolio-category">
            <a href="portfolio/personal.html">
                <h1> <strong>Recent Personal & </strong> <span>Non-Professional Projects</span></h1>
            </a>
            <div class="row">
                <a href="portfolio/personal.html" class="col-12 col-lg-4">
                    <img class="portfolio-thumbnail" src="img/portfolio/sayembara.png" alt="sayembara app">
                </a>
                <a href="portfolio/personal.html" class="col-12 col-lg-4">
                    <img class="portfolio-thumbnail" src="img/portfolio/milantv-rn.png" alt="milantv-rn">
                </a>
                <a href="portfolio/personal.html" class="col-12 col-lg-4">
                    <img class="portfolio-thumbnail" src="img/portfolio/pokemon.png" alt="pokemon">
                </a>
            </div>
        </div> --}}
    </div>
@endsection
