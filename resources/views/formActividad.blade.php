@extends("layouts.plantilla")


@section("infoGeneral")

<h1>Nueva Actividad</h1>

<p>Utiliza el formulario para añadir una nueva actividad.</p>
<div class="container mt-5 mb-5 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center py-3"></h2>
    <div>
        <form id="formularioActividad" method="post" class="form-horizontal pb-5" action="http://localhost:8000">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="titulo">Título</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="titulo" name="titulo" 
                           placeholder="Escriba el título de la actividad">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="portada">Portada</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="portada" name="portada" 
                           placeholder="Seleccione la imagen de portada">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="usuario">Usuario</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="usuario" name="usuario" 
                           placeholder="Escriba su usuario" aria-describedby="userHelpBlock">
                     <small id="userHelpBlock" class="form-text text-muted">
                        El nombre de usuario debe tener entre 3 y 10 caracteres 
                        y no contener espacios, caracteres especiales o emojis.
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="descripcion">Descripción</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                </div>
            </div>
            <p>** Aquí irían los radio buttons y los checkbox**</p>
            <div class="form-group row pb-2">
                <div class="col-sm-9 offset-sm-4">
                    <button type="submit" class="btn btn-verde" name="añadir"  id="añadir">Añadir actividad</button>
                </div>
            </div>
        </form>
    </div>
</div>	     

@endsection