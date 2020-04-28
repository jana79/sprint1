@extends("layouts.plantillaRegistrado")


@section("infoGeneral")

<h1>Nueva imagen</h1>

<p class="text-center">Utiliza el formulario para añadir una imagen que ilustre la actividad realizada.</p>
<div class="container mt-5 mb-5 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center py-5">Añadir imagen</h2>
    <div>
        <form id="formularioActividad" method="get" class="pb-5" action="http://localhost:8000/registrado/poblaciones/borja/ecceHomoImagen">
            <div class="form-group">
                <input type="hidden" class="form-control" id="nom_usuario" name="nom_usuario" value="">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" id="actividad" name="actividad" value="">
            </div>
            <div class="form-group">
                <label for="imagen">Selecciona una imagen *</label>
                <input type="file" class="form-control-file" id="imagen">
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
                            value="Enviar" id= "enviar">Añadir</button>
                </div>
            </div>
        </form>
    </div>
</div>	     	     

@endsection