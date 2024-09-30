@extends('layouts.base')

@section('styles')
<link rel="stylesheet" href="{{ asset('build/assets/css/animation/ftgAnimation.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/animation/btnAnimation.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/about/about.css') }}">
@endsection

@section('title', 'Sobre mí - Samoel Andres')

@section('content')
<div class="container my-4 fade-in">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="col">
                <h1 class="floating-5" style="box-shadow: none;">SAMOEL ANDRES</h1>        
                <p class="floating-5" style="box-shadow: none; color: #535353;">
                    Samoel es un apasionado del desarrollo web, programación y le
                    encanta combinar el desarrollo con la experiencia de usuario.
                </p>
                <p class="floating-5" style="box-shadow: none; color: #535353;">
                    Siempre esta en busca de nuevos desafíos que le permitan
                    continuar su crecimiento y le ayuden a mejorar. Ha trabajado en
                    proyectos escolares e instituciones privadas.
                    <br><br>
                    <b>Su logro más reciente:</b> Desarrollo de un sistema de citas
                    para una entidad privada.
                </p>
                <a class="btn btn-animate floating-3" href="{{ route('projects.index') }}">
                    <span>Mis proyectos</span>
                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
        </div>
        <div class="col-md-6 top-2">
            <div class="row text-center align-items-center">
                <div class="col">
                    <img src="{{ asset('build/assets/image/dev.gif') }}" class="img-fluid floating-3" style="border-radius: 500px;" alt="picture-gif">
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-between m-top-5 bg-white floating-5 p-top-05 border">
        <div class="col-md-2 floating-5" style="box-shadow: none;">
            <h5>Educación</h5>                
            <p style="color: #535353; font-size: 12px;">
                Instituto Tecnológico, Cuautla, Morelos<br>
                Ingeniería en Sistemas<br>
                2019 - 2023
                <br><br>
                CU Benjamin Franklin, Cuautla, Morelos<br>
                Técnico en computación<br>
                2015 - 2018
            </p>
        </div>
        <div class="col-md-2 floating-4" style="box-shadow: none;">
            <h5>Experiencia</h5>
            <p style="color: #535353; font-size: 12px;">
                Telmex<br>
                Pasante de desarrollo<br>
                Marzo - Septiembre, 2023
                <br><br>
                BBVA<br>
                Participante de hackathon<br>
                Octubre, 2022
                <br><br>
                Privada<br>
                Desarrollador full stack<br>
                Marzo - Abril, 2021
            </p>
        </div>
        <div class="col-md-2 floating-3" style="box-shadow: none;">
            <h5>Habilidades</h5>
            <p style="color: #535353; font-size: 12px;">
                Analizar<br>
                Organizar<br>
                Colaborar<br>
                Comunicar<br>
                Innovar e idear<br>
                Resolver<br>
                Adaptar<br>
                Alcanzar
            </p>
        </div>
        <div class="col-md-2 floating-4" style="box-shadow: none;">
            <h5>Habilidades técnicas</h5>
            <p style="color: #535353; font-size: 12px;">
                Java | JavaScript<br>
                MongoDB | MySQL<br>
                Node.js<br>
                Express.js<br>
                Angular<br>
                Bootstrap<br>
                CSS3<br>
                HTML5<br>
                Git | GitHub<br>
                PHP | Laravel<br>
                Adobe XD | Figma<br>
                Diseño UX/UI<br>
                Front end | Back end<br>
            </p>
        </div>
        <div class="col-md-2 floating-5" style="box-shadow: none;">
            <h5>Cursos & certificaciones</h5>
            <p style="color: #535353; font-size: 12px;">
                Laravel<br>
                Wordpress<br>
                Node.js<br>
                Diseño de experiencia de usuario (UX/UI)<br>
                Estructura y manejo de BD con MySQL<br>
                Curso de PHP<br>
                Introducción a Java
            </p>
        </div>
    </div>
</div>

{{-- footer include --}}
@include('layouts.footer')
@endsection