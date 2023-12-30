<!DOCTYPE html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Web portfolio of Samoel Andres. Contains personal information, work history and education.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('logo.ico') }}">

    {{-- font swap --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

    {{-- csrf token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Bootstrap styles --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">

    {{-- another styles --}}
    <link rel="stylesheet" href="{{ asset('build/assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/animation/bgAnimation.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/animation/fadeinAnimation.css') }}">

    {{-- changing styles --}}
    @yield('styles')

    <title>@yield('title')</title>
</head>

<body>
    {{-- navbar include --}}
    @include('layouts.navbar')

    {{-- temporary alert --}}
    <div class="alert alert-warning d-flex align-items-center alert-dismissible fade show mt-3" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        <div class="ms-2">This site is under construction...</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    {{-- temporary alert --}}
        
    {{-- body content --}}
    <div id="body-content">
        <section>
            @yield('content')
        </section>
    </div>

    {{-- animated --}}
    <div class="area">
        <ul class="circles list-unstyled">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    {{-- another scripts --}}
    @yield('scripts')

    {{-- Bootstrap scripts --}}
    <script src="{{ asset('build/assets/app.js') }}"></script>
</body>

</html>