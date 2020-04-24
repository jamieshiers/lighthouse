<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lighthouse | H.I.P.S</title>

    <!-- Styles -->
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
    <livewire:styles>
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        </head>
<body>

    <!-- Header -->
    @include('layouts.partials.header')

    <main class="-mt-32">
        <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <div class="bg-white rounded-lg shadow px-5 py-6 sm:px-6">
                <div class="">
                    @yield('content')
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </main>

<livewire:scripts>
</body>
</html>
