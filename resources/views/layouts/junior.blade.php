<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style>
        body {
            background: #FFFFFF;
            background: -webkit-linear-gradient(to right, #ff7e5f, #feb47b);
            background: linear-gradient(to right, #55c2e5, #abe9cd);
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
{{--    <script src="js/app.js" defer></script>--}}

<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">


    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Problem Solving Tracker
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                    @section('options-nav')

                    @show
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/junior/level/A">
                                A
                            </a>
                            <a class="dropdown-item" href="/junior/level/B">
                                B
                            </a>
                            <a class="dropdown-item" href="/junior/level/C1">
                                C1
                            </a>
                            <a class="dropdown-item" href="/junior/level/C2">
                                C2
                            </a>
                            <a class="dropdown-item" href="/junior/level/D1">
                                D1
                            </a>
                            <a class="dropdown-item" href="/junior/level/D2">
                                D2
                            </a>

                            {{--                            <a class="dropdown-item" target="_blank"--}}
                            {{--                               href="https://codeforces.com/profile/{{auth()->user()->codeforces_username}}">--}}
                            {{--                                CodeForces--}}
                            {{--                            </a>--}}
                            {{--                            <a target="_blank" class="dropdown-item"--}}
                            {{--                               href="https://codeforcesladders.firebaseapp.com/?handle={{auth()->user()->codeforces_username}}--}}
                            {{--                                   ">--}}
                            {{--                                CodeForces Ladder--}}
                            {{--                            </a>--}}
                            {{--                            <a class="dropdown-item" href="/problem/list">--}}
                            {{--                                All Problems--}}
                            {{--                            </a>--}}
                            <a class="dropdown-item" href="/problem/create">
                                Add Problem
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
