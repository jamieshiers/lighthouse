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
</head>
<body class="flex items-center justify-center text-gray-700 text-sm">
    <div class="font-sans bg-gray-200 flex flex-col min-h-screen w-full">

        <div class="bg-blue-800">
            <div class="container mx-auto px-4">
                <div class="flex items-center md:justify-between py-4">
                    <div class="w-1/4 md:hidden">
                        <svg class="fill-current text-white h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16.4 9H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zm0 4H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zM3.6 7h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1z"/></svg>
                    </div>
                    <div class="w-1/2 md:w-auto text-center text-white text-2xl font-light uppercase tracking-widest leading-relaxed">
                        Lighthouse
                    </div>
                    <div class="w-1/4 md:w-auto md:flex text-right">
                        <div>
                            <img class="inline-block h-8 w-8 rounded-full" src="https://avatars3.githubusercontent.com/u/566454?s=460&v=4" alt="">
                        </div>
                        <div class="hidden md:block md:flex md:items-center ml-2">
                            <span class="text-white text-sm mr-1">{{ Auth::user()->name }}</span>
                            <div>
                                <svg class="fill-current text-white h-4 w-4 block opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4.516 7.548c.436-.446 1.043-.481 1.576 0L10 11.295l3.908-3.747c.533-.481 1.141-.446 1.574 0 .436.445.408 1.197 0 1.615-.406.418-4.695 4.502-4.695 4.502a1.095 1.095 0 0 1-1.576 0S4.924 9.581 4.516 9.163c-.409-.418-.436-1.17 0-1.615z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of title bar -->

        <div class="hidden bg-blue-800 md:block md:bg-white md:border-b">
            <div class="container mx-auto px-4">
                <div class="md:flex">
                    <div class="flex -mb-px mr-8">
                        <a href="/" class="no-underline text-gray-600 flex items-center py-4 border-b border-blue-900">
                            <svg class="h-6 w-6 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M3.889 3h6.222a.9.9 0 0 1 .889.91v8.18a.9.9 0 0 1-.889.91H3.89A.9.9 0 0 1 3 12.09V3.91A.9.9 0 0 1 3.889 3zM3.889 15h6.222c.491 0 .889.384.889.857v4.286c0 .473-.398.857-.889.857H3.89C3.398 21 3 20.616 3 20.143v-4.286c0-.473.398-.857.889-.857zM13.889 11h6.222a.9.9 0 0 1 .889.91v8.18a.9.9 0 0 1-.889.91H13.89a.9.9 0 0 1-.889-.91v-8.18a.9.9 0 0 1 .889-.91zM13.889 3h6.222c.491 0 .889.384.889.857v4.286c0 .473-.398.857-.889.857H13.89C13.398 9 13 8.616 13 8.143V3.857c0-.473.398-.857.889-.857z"/></svg>
                            Dashboard</a>
                    </div>
                    <div class="flex -mb-px mr-8">
                        <a href="/promotions" class="no-underline text-gray-600 md:text-grey-dark flex items-center py-4 opacity-50 border-b hover:opacity-100 md:hover:border-blue-900">
                            <svg class="h-6 w-6 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8 7h10V5l4 3.5-4 3.5v-2H8V7zm-6 8.5L6 12v2h10v3H6v2l-4-3.5z" fill-rule="onzero"/></svg>
                            Promotions &amp; Events</a>
                    </div>
                    <div class="flex -mb-px mr-8">
                        <a href="/settings" class="no-underline text-gray-600 md:text-grey-dark flex items-center py-4 opacity-50 border-b hover:opacity-100 md:hover:border-blue-900"">
                        <svg class="h-6 w-6 fill-current mr-2"  fill-rule="onzero" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Settings</a>
                    </div>
                </div>
            </div>
        </div>


        <main class="flex-grow container mx-auto pt-6 pb-8">
            <div class="bg-white border-t border-b sm:border-l sm:border-r sm:rounded shadow mb-6">
                <div class="p-6">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>




</>
</html>
