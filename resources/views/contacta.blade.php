@extends("layouts.plantilla")


@section("infoGeneral")
<h1>Bienvenido a la sección de Contacta</h1>
<p>Utiliza el formulario para ponerte en contacto con nosotros.
    Te responderemos a la mayor brevedad posible.</p>
<div class="container mt-5 mb-5 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center py-5">Formulario de contacto</h2>
    <div>
        <form id="formularioContacto" method="post" class="form-horizontal pb-5" action="enviado.html">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="nombre">Nombre</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="apellidos">Apellidos</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Escriba sus apellidos" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="email">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Escriba su Email" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="mensaje">Mensaje</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="mensaje" name="mensaje"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 offset-sm-4">
                    <div class="form-check">
                        <input type="checkbox" id="gpdr" name="gpdr" value="gpdr" class="form-check-input"/>
                        <label class="form-check-label">Por favor, acepta nuestra política de privacidad</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-9 offset-sm-4">
                    <button type="ll
                            mit" class="btn btn-verde" name="signup" value="Sign up" id= "enviar">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>	     

@endsection