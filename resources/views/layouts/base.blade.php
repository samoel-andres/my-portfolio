<!DOCTYPE html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('logo.ico') }}">

    {{-- Bootstrap styles --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">

    {{-- another styles --}}
    <link rel="stylesheet" href="{{ asset('build/assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/animation/bgAnimation.css') }}">

    {{-- changing styles --}}
    @yield('styles')

    <title>@yield('title')</title>
</head>

<body>
    {{-- navbar include --}}
    @include('layouts.navbar')
        
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

    {{-- footer include --}}
    @include('layouts.footer')

    {{-- another scripts --}}
    @yield('scripts')

    {{-- Bootstrap scripts --}}
    <script src="{{ asset('build/assets/app.js') }}"></script>
</body>

</html>