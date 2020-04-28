@extends("layouts.plantilla")


@section("infoGeneral")

<h1>¡Registro realizado con éxito!</h1>

<div class="container mt-3 mb-3 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center pt-5 mx-auto">El proceso de registro se ha completado
        correctamente.
        Presione el botón Login para iniciar sesión 
        en la aplicación.</h2>
    
    <div class="col-sm-9 offset-sm-4 pt-3 pb-5">
           <a href="http://localhost:8000/colaborador/login" class="btn btn-verde">
       Login
    </a>    
                    
           
    

</div>	     

@endsection