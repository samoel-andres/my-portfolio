@extends('layouts.base')

@section('styles')
<link rel="stylesheet" href="{{ asset('build/assets/css/projects/projects.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/animation/awAnimate.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/animation/ftgAnimation.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/animation/btnAnimation.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/helpers/lwtext.css') }}">
@endsection

@section('title', 'Projects - Samoel Andres')

@section('content')
<div class="container my-4">
    <div class="row">
        <div class="col-md-3 col-md-4 py-1">
            {{-- sidebar --}}
            <a role="button">
                <h4 class="accordion bg-white floating-5 py-2" id="accordion" data-bs-toggle="collapse" href="#projects-list" aria-expanded="true" aria-controls="projects-list">My projects list</h4>
            </a>
            <div class="collapse show floating-4" id="projects-list" style="box-shadow: none;">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action a-style {!! (Request::path()) == 'projects/citas-web' ? 'bg-active' : 'bg-white' !!}" href="{{ route('projects.citasweb') }}">
                        Dating system (web)
                    </a>
                    <a class="list-group-item list-group-item-action a-style {!! (Request::path()) == 'projects/citas-api' ? 'bg-active' : 'bg-white' !!}" href="{{ route('projects.citasapi') }}">
                        Dating system (API Rest)
                    </a>
                    <a class="list-group-item list-group-item-action a-style {!! (Request::path()) == 'projects/blog' ? 'bg-active' : 'bg-white' !!}" href="{{ route('projects.blog') }}">
                        Blog (web)
                    </a>
                </div>
            </div>
            <a class="btn btn-animate floating-3 mt-3 mb-3" href="{{ route('contact.index') }}">
                <span>Contact me</span>
                <svg width="13px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
            </a>
        </div>
        <div class="col-md-8 py-1 floating-5 mb-5" style="box-shadow: none;">
            {{-- content --}}
            <div class="px-4 bg-white {!! (Request::path()) != 'projects' ? 'border' : '' !!}">
                @yield('project')
            </div>
        </div>
    </div>
</div>

{{-- footer incude --}}
@include('layouts.footer')
@endsection