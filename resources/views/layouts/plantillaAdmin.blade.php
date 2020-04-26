<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Zar~rural</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="{{asset('/css-cp/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
              integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" 
              crossorigin="anonymous">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('/css-cp/custom.css')}}">
        
        <!-- ReCaptcha -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    </head>
    <body>
        <!-- Cabecera -->
        <div class="cabecera w-100 p-3 d-flex justify-content-between">
            @yield("cabecera")

            <a href="http://localhost:8000">
                <img class="logotipo ml-2" src="{{asset('images/logo-zarural.png')}}">
            </a>
            <div>
                <i class="fas fa-user verde"></i> admin
                <a href="http://localhost:8000/logout" class="btn btn-verde ml-3 mr-3">
                    Logout
                </a>
            </div>
        </div>

        <!-- Menú de navegación -->
        <section>
            @yield("menu")
            <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-end">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav container d-flex justify-content-between">
                        <li class="nav-item active">
                            <a class="nav-link" href="http://localhost:8000/poblaciones">Poblaciones</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="http://localhost:8000/actividades">Actividades</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="http://localhost:8000/colabora">Colabora</a>
                        </li>       
                        <li class="nav-item active">
                            <a class="nav-link" href="http://localhost:8000/contacta">Contacta</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <!-- Imagen fija con campo search -->
        <section class="portada">
            @yield("imagenBuscar")
            <div class="row h-100 m-0 overlay">
                <div class="col-12 my-auto">
                    <h3 class="text-center text-light">¡Encuentra planes interesantes!</h3>
                    <form class="form-inline  justify-content-center" action="http://localhost:8000/poblaciones/borja">
                        <input class="form-control mr-sm-2" type="text" placeholder="Borja">Borja
                        <button class=" btn btn-verde" type="submit">Buscar</button>
                    </form>
                </div>     				
            </div>
        </section>
        <!-- Contenido -->
        <section class="container mx-auto text-left">
            @yield("infoGeneral")
            

        </section>
        <!-- Footer -->
        <section class="footer">
            @yield("footer")
            <div class="container">
                <p>Todos los derechos reservados. Mayo 2020</p>
            </div>            
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>

