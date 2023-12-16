@extends('layouts.base')

@section('styles')
<link rel="stylesheet" href="{{ asset('build/assets/css/projects/details.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/animation/awAnimate.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/animation/ftgAnimation.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/animation/btnAnimation.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/helpers/lwtext.css') }}">
@endsection

@section('title', 'Projects - Samoel Andres')

@section('content')
<div class="container my-4">
    <div class="row">
        {{-- sidebar --}}
        @include('layouts.sidebar')
        
        {{-- content --}}
        <div class="col-md-8 py-1">
            <div class="px-4 bg-white {!! (Request::path()) != 'projects' ? 'border' : '' !!}">
                @yield('project')
            </div>
        </div>
    </div>
</div>

{{-- footer incude --}}
@include('layouts.footer')
@endsection