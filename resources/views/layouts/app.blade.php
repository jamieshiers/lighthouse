<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased font-sans bg-gray-200">
    <div id="app">
        <nav class="flex items center justify-between flex-wrap bg-blue-900 p-6">
            <div class="w-full block flex-grow lg:flex lg:items-centre lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    <a href="{{ url('/') }}" class="block mt-4 lg:inline-block lg:mt-0 text-gray-300 uppercase font-semibold tracking-wide">
                        {{ config('app.name') }}
                    </a>
                    @guest
                        <a href="{{ route('login') }}" class="block mt-4 lg:inline-block lg:mt-0 text-gray-300 uppercase font-semibold tracking-wide text-right">
                            {{ __('Login') }}
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="block mt-4 lg:inline-block lg:mt-0 text-gray-300 uppercase font-semibold tracking-wide text-right">
                            {{ Auth::user()->name }}
                        </a>
                    @endguest

                </div>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>
</>
</html>
