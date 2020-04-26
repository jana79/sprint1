@extends("layouts.plantilla")


@section("infoGeneral")
<h1>Bienvenido a la sección Colabora</h1>
<p>Si organizas actividades, o conoces de actividades que puedan resultar 
    interesantes puedes colaborar con nosotros.
    Para poder compartir actividades, hacer comentarios, subir fotografías
    o inscribirte en las actividades ofrecidas por otros colaboradores, 
    es necesario estar registrado.
    Elige como quieres registrarte y empieza a disfrutar compartiendo experiencias</p>
<div class="container mt-5 mb-5 shadow col-md-8 pl-5 pr-5 pb-5">					
    <h2 class="text-center py-5">Elige cómo quieres registrarte</h2>
    <div class="col-6 d-flex justify-content-between">
        <div class="col-12">
            <i class="fas fa-user col-2"></i> Usuario registrado
            <ul>
                <li>Añadir comentarios</li>
                <li>Añadir fotografías</li>
                <li>Inscribirse en actividades</li>
            </ul>
            <a href="http://localhost:8000/colabora/registrado" class="btn btn-verde align-self-center">Registrado</a>
        </div>
        <div class="col-12">
            <i class="fas fa-user col-2"></i> Usuario colaborador
            <ul>
                <li>Añadir actividades</li>
                <li>Añadir comentarios</li>
                <li>Añadir fotografías</li>
            </ul>
                <a href="http://localhost:8000/colabora/colaborador" class="btn btn-verde">Colaborador</a>
            </div>
        </div>        
    </div>

</div>	     


@endsection