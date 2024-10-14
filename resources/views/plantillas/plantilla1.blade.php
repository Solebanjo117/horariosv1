<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand navbar-light bg-faded">
                    <div class="container">
                        <a class="navbar-brand" href="#">Bienvenido 
                            @auth
                                {{ Auth::user()->name }}
                            @endauth
                        </a>
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="dropdownId"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    >Catalogos</a
                                >
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="{{route('alumnos.index')}}">Alumnos</a>
                                    <a class="dropdown-item" href="{{route('plazas.index')}}">Plazas</a>
                                    <a class="dropdown-item" href="{{route('puestos.index')}}">Puestos</a>
                                </div>
                            </li>
                        </ul>
                        <form class="d-flex my-2 my-lg-0">
                            <input
                                class="form-control me-sm-2"
                                type="text"
                                placeholder="Search"
                            />
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                                Search
                            </button>
                        </form>
                    </div>
                </nav>
                
            </div>
        </div>
        <div class="row">
            <div class="col">
               @yield('contenido')
            </div>
        </div>
        <div class="row">
            <div class="col">
                @yield('footer')
            </div>
        </div>
    </div>
</body>
</html>