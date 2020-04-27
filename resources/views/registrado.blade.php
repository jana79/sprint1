@extends("layouts.plantilla")


@section("infoGeneral")

<div class="container mt-5 mb-5 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center py-4">Nuevo usuario registrado</h2>
    <div>
        <form id="formularioColaborador" method="get" class="pb-5" 
              action="http://localhost:8000/registroOK">
            <div class="form-group">
                <label for="nombre">Nombre *</label>
                <input type="text" class="form-control" id="nombre" 
                       placeholder="Pedro">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos *</label>
                <input type="text" class="form-control" id="apellidos" 
                       placeholder="Gil Barrero">
            </div>
            <div class="form-group">
                <label for="nom_usuario">Nombre de usuario *</label>
                <input type="text" class="form-control" id="nom_usuario" 
                       placeholder="pegilba">
            </div>
            <div class="form-group">
                <label for="password">Contraseña *</label>
                <input type="password" class="form-control" id="password" 
                       placeholder="********">
            </div>
            <div class="form-group">
                <label for="mail">Correo electrónico *</label>
                <input type="email" class="form-control" id="mail" 
                       placeholder="pegilba79@gmail.com">
            </div>
           <div class="form-group">
                <div>
                    <input type="hidden" class="form-control" id="colaborador" name="colaborador" 
                           value="0">
                </div>
            </div>
            <div class="form-group">
                <div>
                    <input type="hidden" class="form-control" id="admin" name="admin" 
                           value="0">
                </div>
            </div>
            <div class="form-group">
                <div>
                    <input type="hidden" class="form-control" id="bloqueado" name="bloqueado" 
                           value="0">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox" id="politica" name="politica" value="politica" 
                           class="form-check-input"/>
                    <label class="form-check-label">Por favor, acepta 
                        las condiciones del servicio</label>
                </div>
            </div>
            <div class="g-recaptcha pt-3" data-sitekey="6LcnkO0UAAAAAB1-wxUgq4ZAXDUSko8VCKGEUkmK"></div>
            <div class="form-group row">
                <div class="col-sm-9 offset-sm-4 pt-5">
                    <button type="submit" class="btn btn-verde" name="submit" 
                            value="Enviar" id= "enviar">Enviar</button>
                </div>
            </div>
            

        </form>
    </div>
</div>	     

@endsection