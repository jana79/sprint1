@extends("layouts.plantillaColaborador")


@section("infoGeneral")

<h1>Nuevo comentario</h1>

<p class="text-center">Utiliza el formulario para añadir un comentario a una actividad.</p>
<div class="container mt-5 mb-5 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center py-5">Añadir comentario</h2>
    <div>
        <form id="formularioActividad" method="get" class="pb-5" 
              action="http://localhost:8000/colaborador/poblaciones/borjaUsuario/museoVinoComentario">
            <div class="form-group">
                <input type="hidden" class="form-control" id="nom_usuario" name="nom_usuario">
            </div>
            <div class="form-group">
                <label for="comentario">Comentario *</label>
                <textarea class="form-control" 
                          id="comentario" 
                          name="comentario">Hicimos la visita en pareja en verano de 2017. La verdad es que el museo está muy bien cuidado. 
                    Tienen muchos paneles informativos y la guía que nos lo mostró fue muy simpática.
                    La duración fue de casi dos horas y nos pareció una experiencia muy enriquecedora y recomendable. 
                    Además tienen una tienda con productos de la tierra y organizan catas y otras actividades. 
                    Para no perdérselo.
                </textarea>
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