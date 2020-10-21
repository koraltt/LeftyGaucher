<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Lefty|Gaucher') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    
   <!--  favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/site/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/site/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/site/favicon-16x16.png">
        <link rel="shortcut icon" href="/images/site/favicon.ico">
  
</head>
<body>
    <div id="app">
    <!--     <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"> -->
        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color:#F59A23;">
          
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/site/logoWhite.png') }}" width="auto" height="30" alt="" loading="lazy">
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
               
               
               
               
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CATEGORIES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/category/5">Accessoires pour l'ordinateur</a>
                    <a class="dropdown-item" href="/category/3">Instruments Musicaux</a>
                    <a class="dropdown-item" href="/category/1">Papeterie</a>
                    <a class="dropdown-item" href="/category/2">Outils</a>
                    <a class="dropdown-item" href="/category/6">Cuisine</a>
                    <a class="dropdown-item" href="/category/4">Sport</a>
                                    </li>
                <li class="nav-item"><a class="nav-link" href="/products">VOIR TOUT</a> </li>
                <li class="nav-item"><a class="nav-link" href="/admin">ADMIN</a> </li>
                <li class="nav-item"><a class="nav-link" href="/admin/create">CRÉER LE PRODUIT </a> </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                   
          
                        
                   

                    
            </ul>
                    <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                    <a class="nav-link" href="{{route('cart.index')}}"> PANIER <span class="badge badge-pill badge-dark">
                           <i class="fas fa-shopping-cart"></i>
                           @auth
                            {{ Cart::session(auth()->id())->getTotalQuantity()}} 
                            @else
                            0
                            @endauth
                        </span></a>
                </li>

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Enregistrer') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
            
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
  
</body>
</html>
