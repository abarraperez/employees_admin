<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Gestion SinStress</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm nv-client-stle"
        style="background: linear-gradient(180deg, rgba(65,103,44,1) 0%, rgba(95,154,61,1) 100%) !important;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color: white !important;font-weight:bold">
                    <span style="display: inline-block; background-color: white; padding: 5px; border-radius: 50%;">
                        <img src="https://sinstress.cl/wp-content/uploads/2023/09/ico-sinstress-1.ico" alt="Logo" style="height: 40px;">
                        </span>
                    GESTION SINSTRESS
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    @guest
                     <ul></ul>
                    @else
                    <ul class="navbar-nav mr-auto">
                        <!-- Agregar tus enlaces de navegación aquí -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Ventas
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" >
                                      > Informes
                                    </a>    
                                <a class="dropdown-item" >
                                       > Cotizaciones
                                    </a>   
                                    <a class="dropdown-item" >
                                      > Ventas
                                    </a>
                                    <a class="dropdown-item" >
                                      > Compras
                                    </a>
                                    
                                </div>
                               
                            </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="{{ route('agenda') }}"
                            >Agenda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="{{ route('events.index') }}">Eventos</a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link" href="{{ route('cliente.index') }}" >Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" >Proveedores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" >Empleados</a>
                        </li>
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Configuracion
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" >
                                      > Tipos de documentos
                                    </a>
                                    <a class="dropdown-item" >
                                       > Tipos de capacitaciones
                                    </a>
                                    <a class="dropdown-item" >
                                      > Tipos de eventos
                                    </a>
                                </div>
                               
                            </li>
                    </ul>
                    @endguest
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
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @stack('scripts')
</body>
</html>
