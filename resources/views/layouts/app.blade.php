<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lighthouse | H.I.P.S</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="flex items-center justify-center text-gray-700 text-sm">
<div class="font-sans bg-gray-200 flex flex-col min-h-screen w-full">
    <!-- Header -->
@include('layouts.partials.header')

<!-- Main Navigation -->
    @include('layouts.partials.navigation')

    <main class="flex-grow container mx-auto pt-6 pb-8">
        <div class="bg-white border-t border-b sm:border-l sm:border-r sm:rounded shadow mb-6">
            <div class="p-6">
                @yield('content')
            </div>
        </div>
    </main>
</div>
@livewireScripts
</body>
</html>
