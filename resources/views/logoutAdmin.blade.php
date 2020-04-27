@extends("layouts.plantilla")


@section("infoGeneral")

<h1>Cierre de sesión </h1>
<div class="container mt-3 mb-3 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center pt-5 mx-auto">La sesión se ha cerrado
        correctamente.
        ¡¡Hasta pronto!!.</h2>
    <div class="col-sm-9 offset-sm-4 pt-3 pb-5">
        <a href="http://localhost:8000/admin" class="btn btn-verde mr-2">
            Volver
        </a>         
    </div>	  
</div>

    @endsection