@extends('layouts.admin')

@section('title', 'Home')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Welcome</h1>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-primary rounded-3 border border-2 p-2">
                    <div class="card-body text-center">
                        <h5 class="card-title">About</h5>
                        <p class="card-text">Edit about section</p>
                        <a href="/admin/about" class="btn btn-outline-primary">
                            <i class="fas fa-info-circle mr-2"></i> Go to About
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-success rounded-3 border border-2 p-2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Portfolios</h5>
                        <p class="card-text">Edit our portfolios.</p>
                        <a href="/admin/portfolios" class="btn btn-outline-success">
                            <i class="fas fa-briefcase mr-2"></i> Go to Portfolios
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-warning rounded-3 border border-2 p-2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Skills</h5>
                        <p class="card-text">Edit our skills.</p>
                        <a href="/admin/skills" class="btn btn-outline-warning">
                            <i class="fas fa-code mr-2"></i> Go to Skills
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-info rounded-3 border border-2 p-2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Experiences</h5>
                        <p class="card-text">Edit our working experiences.</p>
                        <a href="/admin/experiences" class="btn btn-outline-info">
                            <i class="fas fa-briefcase mr-2"></i> Go to Experiences
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-danger rounded-3 border border-2 p-2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Education</h5>
                        <p class="card-text">Edit our educational background.</p>
                        <a href="/admin/education" class="btn btn-outline-danger">
                            <i class="fas fa-graduation-cap mr-2"></i> Go to Education
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection
