@extends('layouts.base')

@section('styles')
<link rel="stylesheet" href="{{ asset('build/assets/css/animation/ftgAnimation.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/animation/btnAnimation.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/home/home.css') }}">
@endsection

@section('title', 'Samoel Andres')

@section('content')
<div class="container my-4 fade-in">
    <div class="row align-items-end mh-all">
        <div class="col-md-6">
            <div class="col">
                <h1 class="floating-5" style="box-shadow: none;">SAMOEL ANDRES</h1>
                <p class="floating-5" style="box-shadow: none; color: #7d7d7d;">
                    Plased too meet you!<br>
                    Welcome to my portfolio, I hope you like it and it is of
                    interest to you.
                </p>
                <a class="btn btn-animate floating-3" href="{{ route('about.index') }}">
                    <span>About me</span>
                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
        </div>
        <div class="col-md-6 top-2">
            <div class="row text-center">
                <div class="col">
                    <img src="{{ asset('build/assets/image/photo.webp') }}" class="img-fluid floating-3" style="border-radius: 500px;" alt="photo-samoel-andres">
                </div>
            </div>
        </div>
    </div>
</div>

{{-- footer include --}}
@include('layouts.footer')
@endsection