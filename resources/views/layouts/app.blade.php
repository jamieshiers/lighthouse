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
     <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body class="font-sans">

    <!-- Header -->
    @include('layouts.partials.header')

    <div class="max-w-7xl mx-auto">
        <!-- Replace with your content -->
        <div class="py-4    ">
            <div>
                @yield('content')
            </div>
        </div>
        <!-- /End replace -->
    </div>
    </main>
    </div>
    </div>

<livewire:scripts>
</body>
</html>
