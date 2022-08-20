<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" >
                    {{ config('app.name', 'Presentlist') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Acceso') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbar_inicio" class="nav-link" href="/inicio">
                                {{  __('Inicio')  }}
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbar_conocenos" class="nav-link" href="/conocenos">
                                {{  __('Conócenos')  }}
                                </a>
                            </li>
                            <li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="/docentes" 
								role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('Docentes') }}
                                </a>
								<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
									<a id= "docentes_consulta" class="dropdown-item" href="/docentes">
                                        {{ __('Consulta') }}
                                    </a>
									<a  id="docentes_registro"class="dropdown-item" href="/docentes/create">
                                        {{ __('Registro') }}
                                    </a>
                                </div>
						    </li>
                            <li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="/alumnos" 
								role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('Alumnos') }}
                                </a>
								<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
									<a id= "alumnos_consulta" class="dropdown-item" href="/alumnos">
                                        {{ __('Consulta') }}
                                    </a>
									<a id= "alumnos_registro" class="dropdown-item" href="/alumnos/create">
                                        {{ __('Registro') }}
                                    </a>
                                </div>
						    </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->Nombre }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a id="salir" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <img src="{!!asset('imagenes/enter.png')!!}" width="20px">{{ __('    Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <button  title= "diga -> &quot pagina de &quot incluyendo la pagina que quiere visitar" class="nav-link button btn-outline-info " onclick = "iniciar_voz();" >
                                <img src="{!!asset('imagenes/microfono.png')!!}" width="20px" >{{ __('    Voz') }}
</button>
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


<script src="http://cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script> 
   
    

    <script>

function iniciar_voz(){
annyang.start({continuous:false})
}

        if (annyang) {
            // Let's define our first command. First the text we expect, and then the function it should call
            var commands = {
                'pagina de inicio': function () {
                inicio = document.getElementById('navbar_inicio');
                    inicio.click();
                },
               
                'pagina de conócenos': function () {
                    conocenos = document.getElementById('navbar_conocenos');
                conocenos.click();
                },
                'pagina de docentes registro': function () {
                    docentes_registro = document.getElementById('docentes_registro');
                docentes_registro.click();
                },
                'pagina de docentes consulta': function () {
                    docentes_consulta = document.getElementById('docentes_consulta');
                    docentes_consulta.click();
                },
                'pagina de alumnos consulta': function () {
                    alumnos_consulta = document.getElementById('alumnos_consulta');
                    alumnos_consulta.click();
                },
                'pagina de alumnos registro': function () {
                    alumnos_registro = document.getElementById('alumnos_registro');
                    alumnos_registro.click();
                },
                'salir': function () {
                    salir = document.getElementById('salir');
                    salir.click();
                },
            };
            annyang.setLanguage('es-MX');
            annyang.addCommands(commands);
            annyang.debug();
        }
</script>
</body>
</html>
