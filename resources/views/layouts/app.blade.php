<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Доска обьявлений</title>

    <!-- Подключаем BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<style>


    spans {
        position: relative;
        color: #240e2e;
        cursor: pointer;
        line-height: 1;
        text-decoration: none;
        font-family: "Monotype Corsiva" Cursive;
        font-size: 18px;
        white-space: nowrap;
    }

    spans:after {
        display: block;
        position: absolute;
        left: 0;
        width: 0;
        height: 2px;
        background-color: rgb(235, 16, 16);
        content: "";
        transition: width 1s, height 1s, background-color 1s, transform 1s;
        white-space: nowrap;
    }

    spans:hover:after,
    spans:focus:after {
        width: 100%;
        background-color: rgb(0, 255, 0);
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
        white-space: nowrap;
    }

    .transition_disabled {
        -webkit-transition: none !important;
        -moz-transition: none !important;
        -ms-transition: none !important;
        -o-transition: none !important;
    }


    a {
        text-decoration: none;
    }
</style>


<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light  bg-white shadow-sm" style="background-color: #226da3;">
        <div class="container">
            <a href="http://www.tdmouse.ru">
                <spans> О нас</spans>
            </a> &#160 &#160 &#160 <a href="http://www.tdmouse.ru">
                <spans> Свяжитесь с нами</spans>
            </a>

            {{--           <a class="navbar-brand" href="{{ url('/') }}">

                       </a>
                --}}
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown  ">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
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
