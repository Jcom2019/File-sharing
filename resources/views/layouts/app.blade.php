<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>File Sharing</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-inverse">
            <div class="container row">
                <div class="navbar-brand col-md-4">
                   <img src="/storage/png/file_transfer.png"> {{ _('File Sharing') }}
                </div>
                {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"> --}}
                    {{-- <span class="navbar-toggler-icon"></span> --}}
                {{-- </button> --}}

                <div class="col-md-8">
                    <!--  center Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><div id="home-btn"><a class="nav-link" href="/">Home</a></div></li>
                        <li class="nav-item"><div id="about-btn"><a class="nav-link" href="about">About</a></div></li>
                {{-- right side of the navbar --}}

                {{-- <div class="col-md-4"> --}}
                    {{-- <ul class="navbar-nav"> --}}
                        {{-- <li><a href="{{ route('login') }}" style="padding:10px; color:cornsilk">login</a></li> --}}
                        {{-- <li><a href="{{ route('register')}}" style="padding:10px; color:cornsilk">Register</a></li> --}}
                    {{-- </ul> --}}
                {{-- </div> --}}
                    {{-- <!-- Right Side Of Navbar --> --}}

                        {{-- <!-- Authentication Links --> --}}
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
                                <script>
                                     document.getElementById('nav').innerHTML="";
                                 </script>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </div>
                                 </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <div class="jumbotron">
            @yield('contents')
            </div>
        </main>
    </div>
    <footer>copyright&copy Jcom Tech 2019</footer>
</body>
</html>
