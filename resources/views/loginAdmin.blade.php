@extends("layouts.plantilla")


@section("infoGeneral")

<h1>Inicio de sesión </h1>

<p class="text-center">Utiliza el formulario para iniciar sesión en la aplicación.</p>
<div class="container mt-5 mb-5 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center py-3">Inicio de sesión</h2>
    <div>
        <form id="formularioLogin" method="get" class="form-horizontal pb-5" action="http://localhost:8000/admin/inicio">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="usuario">Usuario *</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="usuario" name="usuario" 
                           placeholder="admin" aria-describedby="userHelpBlock">
                     <small id="userHelpBlock" class="form-text text-muted">
                        El nombre de usuario debe tener entre 3 y 10 caracteres 
                        y no contener espacios, caracteres especiales o emojis.
                    </small>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="password">Contraseña *</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="password" name="password" 
                           placeholder="*********" aria-describedby="passwordHelpBlock">
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        La contraseña debe tener entre 8 y 20 caracteres, contener 
                        letras y números y no contener espacios, caracteres especiales o emojis.
                    </small>
                </div>
            </div>

            <div class="form-group row pt-4">
                <div class="col-sm-9 offset-sm-4">
                    <button type="submit" class="btn btn-verde" name="enviar"  id="enviar">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>	     

@endsection