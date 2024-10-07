@extends('layouts.base')

@section('styles')
<link rel="stylesheet" href="{{ asset('build/assets/css/projects/details.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/animation/awAnimate.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/animation/ftgAnimation.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/animation/btnAnimation.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/helpers/lwtext.css') }}">
@endsection

<style>
    /* @keyframes effect {
        0% {
            background: 
                linear-gradient(
                    72deg,
                    #dfdfdf56 5%,
                    #fff 10%,
                    #dfdfdf56 30%,
                    #fff 50%,
                    #dfdfdf56 70%,
                    #fff 80%,
                    #e7e6e6 95%
                );
        }
        25% {
            background: 
                linear-gradient(
                    72deg,     
                    #e7e6e6 5%,
                    #dfdfdf56 10%,
                    #fff 30%,
                    #dfdfdf56 50%,
                    #fff 70%,
                    #dfdfdf56 80%,
                    #fff 95%
                );
        }
        50% {
            background: 
                linear-gradient(
                    72deg,     
                    #fff 5%,
                    #e7e6e6 10%,
                    #dfdfdf56 30%,
                    #fff 50%,
                    #dfdfdf56 70%,
                    #fff 80%,
                    #dfdfdf56 95%
                );
        }
        75% {
            background: 
                linear-gradient(
                    72deg,     
                    #dfdfdf56 5%,
                    #fff 10%,
                    #e7e6e6 30%,
                    #dfdfdf56 50%,
                    #fff 70%,
                    #dfdfdf56 80%,
                    #fff 95%
                );
        }
        100% {
            background: 
                linear-gradient(
                    72deg,     
                    #fff 5%,
                    #dfdfdf56 10%,
                    #fff 30%,
                    #e7e6e6 50%,
                    #dfdfdf56 70%,
                    #fff 80%,
                    #dfdfdf56 95%
                );
        }
    } */

    .span-silver {
        border: 1px solid #C0C0C0;
        border-radius: 25px;
        padding: 2px 10px 2px 10px;
        color: #535353;
        /* animation: effect 6s;
        animation-iteration-count: infinite; */
    }

    .span-silver:hover {
        border: 1px solid #006064;
        color: #006064;
    }
</style>

@section('title', 'Proyectos - Samoel Andres')

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