@extends("layouts.plantilla")


@section("infoGeneral")

<h1>Nuevo Usuario Registrado </h1>

<p>Utiliza el formulario para registrarte como usuario registrado en la aplicación.</p>
<div class="container mt-5 mb-2 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center py-3"></h2>
    <div>
        <form id="formularioRegistrado" method="post" class="form-horizontal pb-5" action="http://localhost:8000">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="nombre">Nombre</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nombre" name="nombre" 
                           placeholder="Escriba su nombre">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="apellidos">Apellidos</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="apellidos" name="apellidos" 
                           placeholder="Escriba sus apellidos">
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
                <label class="col-sm-4 col-form-label" for="password">Contraseña</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="password" name="password" 
                           placeholder="Escriba sucontraseña" aria-describedby="passwordHelpBlock">
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        La contraseña debe tener entre 8 y 20 caracteres, contener 
                        letras y números y no contener espacios, caracteres especiales o emojis.
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="mail">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="mail" name="mail" 
                           placeholder="Escriba su correo electrónico">
                </div>
            </div>

            <div class="form-group row pt-3">
                <div class="col-sm-9 offset-sm-4">
                    <button type="submit" class="btn btn-verde" name="enviar"  id="enviar">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>	     

@endsection