<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('storage/images/KT-Logo-Transparent.png')}}"> 
    <title>{{ config('app.name', 'KT House Productions') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/styles.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel" style="background-color: black;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('home') }}">
                    <img id="logo" src="https://kt-house-productions.s3.ap-southeast-1.amazonaws.com/images/KT-Logo-Transparent.png" height=20% width=20%>
                </a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>
                        
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link text-nowrap" href="{{ route('vision') }}"> What We Do </a></li>
                            <li><a class="nav-link text-nowrap" href="{{ route('aboutUs') }}"> Who We Are </a></li>
                            <li><a class="nav-link text-nowrap" href="{{ route('works') }}"> Works </a></li>
                            <li><a class="nav-link text-nowrap" href="#"> Contact Us </a></li>
                            <li><a class="nav-link text-nowrap" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link text-nowrap" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li><a class="nav-link text-nowrap" href="{{ route('vision') }}"> What We Do </a></li>
                            <li><a class="nav-link text-nowrap" href="{{ route('aboutUs') }}"> Who We Are </a></li>
                            <li><a class="nav-link text-nowrap" href="{{ route('works')}}"> Works </a></li>
                            <li><a class="nav-link text-nowrap" href="#"> Contact Us </a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('users.index') }}">Manage Users</a>
                                    <a class="dropdown-item" href="{{ route('roles.index') }}">Manage Roles</a>
                                    <a class="dropdown-item" href="{{ route('films.index') }}">Manage Films</a>
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


        <main class="py-4">
            <div class="container">
            @yield('content')
            </div>
        </main>
    </div>
</body>
</html>