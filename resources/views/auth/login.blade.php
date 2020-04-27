<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lighthouse | H.I.P.S</title>

    <!-- Styles -->
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body class="antialiased font-sans bg-gray-200 h-screen">
<div class="container mx-auto h-full flex justify-center items-center">
    <div class="w-1/3">
        <div class="border-teal-600 p-8 border-t-8 border bg-white mb-6 rounded-lg shadow-lg" >
            <!--<img src="{{ asset('images/logo.png') }}" alt="Logo"  width="70px" class="container justify-center items-center"> -->
            <h1 class="font-light text-3xl mb-6 text-center">Lighthouse</h1>
            <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="font-semibold text-xs uppercase tracking-wide text-gray-600 block mb-2">{{ __('E-mail Address') }}</label>
                    <input class="block appearance-none w-full bg-white border border-gray-400 hover:border-teal-600 focus:border-teal-400 px-2 py-2 rounded
                    @error('email') is-invalid @enderror"
                    type="email"
                    value="{{ old('email') }}"
                    id="email"
                    name="email"
                    placeholder="Your Email"
                    required
                    autocomplete="email"
                    autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="font-semibold text-xs uppercase tracking-wide text-gray-600 block mb-2">{{ __('Password') }}</label>
                    <input class="block appearance-none w-full bg-white border border-gray-400 hover:border-teal-600 focus:border-teal-400 px-2 py-2 rounded @error('password') is-invalid @enderror"
                           type="password"
                           id="password"
                           name="password"
                           placeholder="Your Password"
                        required
                        autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <button
                    class="font-bold uppercase tracking-wide text-white bg-teal-600 hover:bg-teal-800 rounded py-2 px-4 w-full mt-2"
                    type="submit">{{__('Login') }}</button>
            </form>
        </div>
        <p class="text-center text-gray-500 text-xs">
            &copy; 2020 Jamie Shiers. All rights reserved.
        </p>
    </div>
</div>

</body>
</html>
