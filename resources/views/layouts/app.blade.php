<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="/../resources/images/favicon.png" type="image/png">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ URL::asset('css/slick.css'); }}">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ URL::asset('css/LineIcons.css') }}">
    
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css'); }}">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="../css/magnific-popup.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css'); }}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{ URL::asset('css/default.css'); }}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>

<body>
    <!--====== HEADER PART START ======-->
    <header class="header-area">
        <div class="navbar-area headroom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                {{-- <img src="/../resources/images/logo.png" alt="Logo"> --}}
                                <h3 class="text-danger">GENERATE-ME</h3>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#about">About </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#services">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#portfolio">Portfolio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#blog">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#contact">Contact</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                            @guest
                                @if (Route::has('login'))
                                    <div class="navbar-btn d-none d-sm-inline-block mr-1">
                                        <a class="main-btn"href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </div>
                                @endif
                                @if (Route::has('register'))
                                    <div class="navbar-btn d-none d-sm-inline-block">
                                        <a class="main-btn" href="{{ url('register') }}">Konto erstellen</a>
                                    </div>
                                @endif
                                @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        <div class="pt-100">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/c665bba4d4.js" crossorigin="anonymous"></script>
</body>
</html>
