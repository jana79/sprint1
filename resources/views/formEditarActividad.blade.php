@extends("layouts.plantillaColaborador")


@section("infoGeneral")

<h1>Editar Actividad</h1>

<div class="container mt-5 mb-5 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center py-5">Editar actividad</h2>
    <div>
        <form id="formularioEditarActividad" method="get" class="pb-5" action="http://localhost:8000/colaborador/editarActividadOK">
            <div class="form-group">
                <label for="titulo">Título *</label>
                <input type="text" class="form-control" id="titulo" name="titulo" 
                       placeholder="Escriba el título de la actividad">
            </div>
            <div class="form-group">
                <label for="portada">Imagen de portada *</label>
                <input type="file" class="form-control-file" id="portada">
            </div>
            <div class="form-group">
                <label for="poblacion">Elige la población *</label>
                <select id="poblacion" class="form-control">
                    <option></option>
                    <option>Abanto</option>
                    <option>Acered</option>
                    <option>Agón</option>
                    <option>Borja</option>
                    <option>Calatayud</option>
                    <option>Cetina</option>
                    <option>Daroca</option>
                    <option>Tarazona</option>
                </select>
            </div>
            <div class="form-group">
                <label for="categoria">Elige la categoría *</label>
                <select id="categoria" class="form-control">
                    <option></option>
                    <option>Naturaleza</option>
                    <option>Ocio</option>
                    <option>Patrimonio</option>
                    <option>Tradición</option>
                </select>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción de la actividad *</label>
                <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
            </div>
            <div class="form-group">
                <div>
                    <input type="hidden" class="form-control" id="nom_usuario" name="nom_usuario" 
                           value="">
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