<!DOCTYPE html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    {{-- Bootstrap styles --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">

    {{-- another styles --}}

    {{-- changing styles --}}
    @yield('styles')

    <title>@yield('title')</title>
</head>

<body>
    <div class="content">
        {{-- navbar include --}}
        
        <div class="container">
            <section>
                @yield('content')
            </section>
        </div>

        {{-- footer include --}}

        @yield('scripts')

        {{-- Bootstrap scripts --}}
        <script src="{{ asset('build/assets/app.js') }}"></script>
    </div>
</body>

</html>