<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset(url('css/all.min.css')) }}">
    {{-- <link rel="stylesheet" href="{{ asset(url('css/Cat.css')) }}"> --}}
    <link rel="stylesheet" href="{{ asset(url('css/bootstrap.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(url('css/bootstrap-grid.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(url('css/style.css')) }}">
    <link rel="stylesheet" href="{{ asset(url('css/Cat.css')) }}">




</head>

<body class="antialiased">
    <header>
        <nav>

            <div class="links">
                <ul>
                    <li class="first"> <i class="fa fa-list"></i> <a href="/category">Categories </a></li>
                    <li><a href="#">Home </a></li>
                    <li><a href="#">Home </a></li>
                </ul>
                <div class="logo"> <a href="{{ url('/') }}"><img src="../img/logo.png" alt=""></a> </div>
                <ul>
                    <li><a href="#">Profile </a></li>
                    <li><a href="#">Cart </a></li>
                    <li class="last">
                        {{-- {{ $login=1 }} --}}
                        {{-- @if ($login) --}}
                            <a href="{{url('admin')}}">Login </a>
                            <a href="#">SinUp </a>
                        {{-- @else
                        <a href="#">Logout </a>
                            @endif --}}
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="cont" style="padding-top:calc(7% - 3px); min-height:100vh;   position: relative; ">

     @yield('content')

    </div>




    <footer>
        <div class="footer">
            <div class="logo">
                <div class="img">
                    <img src="./img/logo.png" alt="" />
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

</body>
</html>
