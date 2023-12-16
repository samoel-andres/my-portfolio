@extends('layouts.base')

@section('styles')
<link rel="stylesheet" href="{{ asset('build/assets/css/projects/index-projects.css') }}">
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
    </div>
</div>

{{-- footer incude --}}
@include('layouts.footer')
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
	$("#up i").on('click', function (event) {
		event.preventDefault();
		$("body,html").animate({
			scrollTop: 0
		}, 1500);
		return false;
	});
</script>
@endsection