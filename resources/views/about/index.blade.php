@extends('layouts.base')

@section('styles')
<link rel="stylesheet" href="{{ asset('build/assets/css/animation/ftgAnimation.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/animation/btnAnimation.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/about/about.css') }}">
@endsection

@section('title', 'About - Samoel Andres')

@section('content')
<div class="container my-4 fade-in">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="col">
                <h1 class="floating-5" style="box-shadow: none;">SAMOEL ANDRES</h1>        
                <p class="floating-5" style="box-shadow: none; color: #7d7d7d;">
                    Samoel is a programmer focused on web development recently<br>
                    graduated -- currently looking work.
                </p>
                <p class="floating-5" style="box-shadow: none; color: #7d7d7d;">
                    He has worked on school projects and in some private companies.<br>
                    He most recent archievement has been the development of an<br>
                    appointment system, this last developed in school residences<br>
                    together with one sompany private.
                </p>
                <a class="btn btn-animate floating-3" href="{{ route('projects.index') }}">
                    <span>My projects</span>
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
    <div class="row justify-content-between m-top-5 bg-white floating-5 p-top-05 border">
        <div class="col-md-2 floating-5" style="box-shadow: none;">
            <h5>Education</h5>                
            <p style="color: #7d7d7d; font-size: 12px;">
                Instituto Tecnológico, Cuautla, Morelos<br>
                Systems engineer<br>
                2019 - 2023
                <br><br>
                CU Benjamin Franklin, Cuautla, Morelos<br>
                Computer technical<br>
                2015 - 2018
            </p>
        </div>
        <div class="col-md-2 floating-4" style="box-shadow: none;">
            <h5>Experience</h5>
            <p style="color: #7d7d7d; font-size: 12px;">
                Telmex<br>
                Developer intern<br>
                Dating system development<br>
                March - September, 2023
                <br><br>
                Private<br>
                Full stack developer<br>
                Collaboration on hospital system development<br>
                March - April, 2021
            </p>
        </div>
        <div class="col-md-2 floating-3" style="box-shadow: none;">
            <h5>Skills</h5>
            <p style="color: #7d7d7d; font-size: 12px;">
                Analysis<br>
                Basic concepts of UX/UI<br>
                Web development<br>
                Algorithms
            </p>
        </div>
        <div class="col-md-2 floating-4" style="box-shadow: none;">
            <h5>Technical skills</h5>
            <p style="color: #7d7d7d; font-size: 12px;">
                JavaScript<br>
                MongoDB<br>
                MySQL<br>
                Node.js<br>
                Express.js<br>
                Angular<br>
                Bootstrap<br>
                CSS3<br>
                HTML5<br>
                Git/GitHub<br>
                Laravel<br>
                Frontend<br>
                Backend
            </p>
        </div>
        <div class="col-md-2 floating-5" style="box-shadow: none;">
            <h5>Courses & certifications</h5>
            <p style="color: #7d7d7d; font-size: 12px;">
                Laravel developer<br>
                Wordpress site developer<br>
                Node.js developer
            </p>
        </div>
    </div>
</div>

{{-- footer include --}}
@include('layouts.footer')
@endsection