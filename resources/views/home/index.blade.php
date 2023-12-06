@extends('layouts.base')

@section('styles')
<link rel="stylesheet" href="{{ asset('build/assets/css/ftgAnimation.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/btnAnimation.css') }}">
@endsection

@section('title', 'Samoel Andres')

@section('content')
{{-- navbar include --}}

<div class="container my-4">
    <div style="height: calc(100vh - 200px);">
        <div class="row">
            <div class="col-md-6">
                <div id="saam" class="row align-items-end" style="height: calc(100vh - 200px);">
                    <div class="col">
                        <h1 class="floating-5">SAMOEL ANDRES</h1>
                        <a class="btn btn-animate floating-3" href="#">
                            <span>About me</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row align-items-center text-center" style="min-height: calc(100vh - 200px);">
                    <div class="col">
                        <img src="{{ asset('build/assets/image/photo.png') }}" class="img-fluid floating-3" style="border-radius: 500px;" alt="photo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- footer include --}}
@endsection