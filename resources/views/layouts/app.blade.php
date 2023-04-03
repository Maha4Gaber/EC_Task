<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset(url('css/all.min.css')) }}">
    {{-- <link rel="stylesheet" href="{{ asset(url('css/Cat.css')) }}"> --}}
    <link rel="stylesheet" href="{{ asset(url('css/bootstrap.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(url('css/bootstrap-grid.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(url('css/style.css')) }}">
    <link rel="stylesheet" href="{{ asset(url('css/Cat.css')) }}">


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


</head>

<body class="antialiased">

    <!-- Scripts -->

    <div id="app">
        <header>
            <nav>

                <div class="links">
                    <ul>
                        <li class="first"> <i class="fa fa-list"></i> <a >
                            {{-- href="/category" --}}
                            Categories </a></li>
                        <li><a href="#">Profile </a></li>
                        <li><a href="#">Cart </a></li>

                    <li class="logo"> <a class="navbar-brand" href="{{ url('/') }}">
                            {{-- {{ config('app.name', 'Laravel') }} --}}
                            <img src="../img/logo.png" alt="">
                        </a> </li>
<<<<<<< Updated upstream


                        <li class="last">
=======
<<<<<<< HEAD
                        <li><a href="#">Profile </a></li>



=======


                        <li class="last">
>>>>>>> ef385a467262da1d6ba7bb5bcf45eaf46516315a
>>>>>>> Stashed changes
                            {{-- {{ $login=1 }} --}}
                            {{-- @if ($login) --}}
                            @guest
                                @if (Route::has('login'))
                            <li class="">
                                <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="">
                                    <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @if (Auth::user()->role_as == '1')
                                <li>
                                        <div class="">
                                                <button class="loguot" onclick="event.preventDefault();
                                                    document.getElementById('dashbourd').submit();">Dashbourd</button>
                                            </div>
<<<<<<< Updated upstream
                                        <form id="dashbourd" action="{{ url('admin/dashbourd') }}" method="get"
=======
<<<<<<< HEAD
                                        <form id="dashbourd" action="{{ url('dashbourd') }}" method="get"
=======
                                        <form id="dashbourd" action="{{ url('admin/dashbourd') }}" method="get"
>>>>>>> ef385a467262da1d6ba7bb5bcf45eaf46516315a
>>>>>>> Stashed changes
                                            class="d-none">
                                            @csrf
                                        </form>
                                </li>
                            @else
                            @endif
                            <li class="last">
                                <a id="navbarDropdown" class=" dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>


                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                        {{-- @else
                        <a href="#">Logout </a>
                            @endif --}}
<<<<<<< Updated upstream
                        </li>
=======
<<<<<<< HEAD
=======
                        </li>
>>>>>>> ef385a467262da1d6ba7bb5bcf45eaf46516315a
>>>>>>> Stashed changes
                    </ul>
                </div>
            </nav>
        </header>


        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                        @endguest --}}
        {{-- </ul>
                </div>
            </div>
        </nav> --}}

        <main class=" ">

                        @yield('content')

        </main>
        <footer>
        <div class="footer">
            <div class="logo">
                <div class="img">
                    <img src="../img/logo.png" alt="" />
                </div>
                <p>Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Deserunt culpa fugiat, in quod quam incidunt.</p>
            </div>
            <div class="links">
                <ul>
                    <li><a href="http://">contact us</a></li>
                    <li><a href="http://">contact us</a></li>
                    <li><a href="http://">contact us</a></li>
                    <li><a href="http://">contact us</a></li>
                </ul>
            </div>
        </div>
        <div class="copyrights">
            <h3>Made with <i class="fa fa-heart "></i>  by Maha Gaber Anter</h3>
        </div>
    </footer>
    </div>
</body>

</html>
