@extends("layouts.plantilla")


@section("infoGeneral")

<div class="container mt-3 mb-3 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center pt-5 mx-auto">Su usuario ha sido bloqueado 
        por no cumplir con la política de publicación de la aplicación.
    Puede ponerse en contacto con el administrador para resolver sus dudas.</h2>
    <div class="col-sm-9 offset-sm-4 pt-3 pb-5">
        <a href="http://localhost:8000/contacta" 
           class="btn btn-verde">
            Contacto
        </a>         
    </div>	  
</div>

    @endsection