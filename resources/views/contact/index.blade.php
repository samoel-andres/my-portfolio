@extends('layouts.base')

@section('styles')
<link rel="stylesheet" href="{{ asset('build/assets/css/animation/ftgAnimation.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/animation/btnanimation.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/contact/contact.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/helpers/lwtext.css') }}">
@endsection

@section('title', 'Contact - Samoel Andres')

@section('content')
<div class="container my-4">
    <form class="row p-3 floating-5 bg-white border" method="POST" action="{{ route('send') }}"> 
        @csrf
        <h1 class="floating-5">CONTACT</h1>
        <div class="col-md-6 floating-4" style="box-shadow: none;">
            <div class="col-md-12">
                <label for="name" class="form-label" style="color: #7d7d7d;">Your name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>

                @error('name')
                <span class="text-danger">
                    <span>* {{ $message }}</span>
                </span>
                @enderror
            </div>
            <div class="col-md-12">
                <label for="email" class="form-label" style="color: #7d7d7d;">Your email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>

                @error('emali')
                <span class="text-danger">
                    <span>* {{ $message }}</span>
                    </span>
                @enderror
            </div>
            <div class="col-md-12">
                <label for="phone" class="form-label" style="color: #7d7d7d;">Your phone number</label>
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
                <label for="subject" class="form-label" style="color: #7d7d7d;">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject') }}" required>

                @error('subject')
                <span class="text-danger">
                    <span>* {{ $message }}</span>
                    </span>
                @enderror
            </div>
            <div class="col-md-12">
                <label for="message" class="form-label" style="color: #7d7d7d;">Message</label>
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
                    <span>Send</span>
                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </button>
            </div>
        </div>
        @else
        <div class="p-3">
            <div class="alert alert-info d-flex align-items-center alert-dismissible fade show mt-4" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
                <div class="ms-2">{{ session('success-sends') }}</div>
            </div>
        </div>
        @endif
        <div class="row mt-4 mb-2">
            <div class="col-md-12">
                <p style="margin: 0px 20px;" class="linea">
                    <span>Or</span>
                </p>
            </div>
        </div>
        <div id="contact" class="row mb-1 bottom-2" style="color: #7d7d7d">
            <div class="col-md-6 text-end">
                <strong>Call me</strong>
                <p class="text-end">55 6104 2249</p>
            </div>
            <div class="col-md-6 text-start">
                <strong>Send me an email</strong>
                <p class="text-start flex-wrap">aevs.andres.vidal@gmail.com</p>
            </div>
        </div>
    </form>
</div>

{{-- footer include --}}
@include('layouts.footer')
@endsection