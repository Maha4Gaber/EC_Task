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
                        <li class="first">
                            <a href="{{ url('/blogs') }}">
                                <i class="fa fa-list " style="margin-right: 0px"></i>
                                Blogs </a>
                        </li>

                        <li>
                            <a href="{{ url('/profile') }}">
                                <i class="fa-solid fa-user" style="margin-right: 0px"></i>
                                Profile </a>
                        </li>

                        <li>
                            <a class="navbar-brand" href="{{ url('/cart') }}">
                                <i class="fa fa-cart-shopping"></i>
                            Cart </a>
                        </li>

                        <li class="logo">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="../img/logo.png" alt="">
                            </a>
                        </li>
                        <li><a class="navbar-brand" href="{{ url('/aboutus') }}">
                            <i class="fa-regular fa-address-card"></i>
                            About Us </a></li>
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
                                        <button class="loguot"
                                            onclick="event.preventDefault();
                                                    document.getElementById('dashbourd').submit();">Dashbourd</button>
                                    </div>
                                    <form id="dashbourd" action="{{ url('admin/dashbourd') }}" method="get"
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
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

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
                        <li><a href="{{ url('/contact') }}">contact us</a></li>
                        <li><a href="http://">contact us</a></li>
                        <li><a href="http://">contact us</a></li>
                        <li><a href="http://">contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyrights">
                <h5>Made with <i class="fa fa-heart "></i> by Maha Gaber Anter</h5>
            </div>
        </footer>
    </div>
    <script src="{{ asset(url('js/email.min.js')) }}"></script>
    <script src="{{ asset(url('js/botstrap.js')) }}"></script>
    <script src="{{ asset(url('js/script.js')) }}"></script>
</body>

</html>
