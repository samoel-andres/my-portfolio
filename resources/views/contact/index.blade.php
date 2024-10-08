@extends('layouts.base')

@section('styles')
<link rel="stylesheet" href="{{ asset('build/assets/css/animation/ftgAnimation.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/animation/btnAnimation.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/contact/contact.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/helpers/lwtext.css') }}">
@endsection

@section('title', 'Contacto - Samoel Andres')

@section('content')
<div class="container my-4 mb-5 fade-in">
    <form class="row p-3 floating-5 bg-white border" method="POST" action="{{ route('send') }}"> 
        @csrf
        <h1 class="floating-5" style="box-shadow: none;">CONTACTO</h1>
        <div class="col-md-6 floating-4" style="box-shadow: none;">
            <div class="col-md-12">
                <label for="name" class="form-label" style="color: #535353;">Tu nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>

                @error('name')
                <span class="text-danger">
                    <span>* {{ $message }}</span>
                </span>
                @enderror
            </div>
            <div class="col-md-12">
                <label for="email" class="form-label" style="color: #535353;">Tu dirección de correo</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>

                @error('emali')
                <span class="text-danger">
                    <span>* {{ $message }}</span>
                    </span>
                @enderror
            </div>
            <div class="col-md-12">
                <label for="phone" class="form-label" style="color: #535353;">Tu número de telófono</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>

                @error('phone')
                <span class="text-danger">
                    <span>* {{ $message }}</span>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6 floating-4" style="box-shadow: none;">
            <div class="col-md-12">
                <label for="subject" class="form-label" style="color: #535353;">Motivo de contacto</label>
                <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject') }}" required>

                @error('subject')
                <span class="text-danger">
                    <span>* {{ $message }}</span>
                    </span>
                @enderror
            </div>
            <div class="col-md-12">
                <label for="message" class="form-label" style="color: #535353;">Mensaje</label>
                <textarea class="form-control" style="height: 105px" name="message" id="message" required></textarea>

                @error('message')
                <span class="text-danger">
                    <span>* {{ $message }}</span>
                    </span>
                @enderror
            </div>
        </div>
        @if(!session('success-sends'))
        <div class="row m-2 text-end">            
            <div class="col">
                <button class="btn btn-animate floating-3" type="submit">
                    <span>Enviar</span>
                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </button>
            </div>
        </div>
        @endif
        @if(session('send-error'))
        <div class="p-3">
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show mt-3" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x hidde-ico-svg" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                <div class="ms-2">{{ session('send-error') }}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif
        @if(session('success-sends'))
        <div class="p-3">
            <div class="alert alert-info d-flex align-items-center alert-dismissible fade show mt-4" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x hidde-ico-svg" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
                <div class="ms-2">{{ session('success-sends') }}</div>
            </div>
        </div>
        @endif
        <div class="row mt-4 mb-2">
            <div class="col-md-12">
                <p style="margin: 0px 20px;" class="linea">
                    <span>O</span>
                </p>
            </div>
        </div>
        <div id="contact" class="row mb-1 bottom-2" style="color: #535353">
            <div class="col-md-6 text-end">
                <strong>Llámame</strong>
                <p class="text-end">55 6104 2249</p>
            </div>
            <div class="col-md-6 text-start">
                <strong>Mi correo</strong>
                <p class="text-start flex-wrap">aevs.andres.vidal@gmail.com</p>
            </div>
        </div>
    </form>
</div>

{{-- footer include --}}
@include('layouts.footer')
@endsection