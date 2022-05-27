<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kecamatan Benjeng</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <script src="{{ asset('js/alpinejs.min.js') }}"></script> --}}
    @yield('head')
</head>

<body class="antialiased">
    @yield('black')
    <div class="flex flex-col h-screen">
        <div class="bg-blue-600 flex justify-between items-center py-3 px-20">
            <a href="" class="text-white font-bold flex space-x-3 items-center">
                {{-- <img src="{{ asset('images/logo.svg') }}" class=" w-8" alt=""> --}}
                <span>
                    Dispen Kecamatan
                </span>
            </a>
            <div class="flex space-x-3 text-white font-semibold">
                {{-- <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('login') }}">Admin</a> --}}
            </div>
        </div>
        @yield('content')
        <div class="flex w-full bg-blue-600 py-5 text-white space-x-5 justify-center font-semibold">
            Made With &#10084 by Achmad Yusuf Amir
        </div>
    </div>
</body>
@yield('script')

</html>