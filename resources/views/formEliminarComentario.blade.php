@extends("layouts.plantillaColaborador")


@section("infoGeneral")

<div class="container mt-5 mb-5 shadow col-md-6 pl-5 pr-5 pb-5">					
    <h2 class="text-center py-5">¿Estás seguro de querer eliminar el
    comentario sobre el Museo del vino D.O Campo de Borja?</h2>
    <div class="col-6 d-flex justify-content-between">
        <div class="col-12">
            
            <a href="http://localhost:8000/colaborador/eliminarComentarioOK" 
               class="btn btn-verde ml-5">Eliminar</a>
        </div>
        <div class="col-12">
            
                <a href="http://localhost:8000/colaborador/poblaciones/borjaUsuario/museoVinoComentarioEditado" 
                   class="btn btn-verde ml-5">Cancelar</a>
            </div>
        </div>        
    </div>

</div>	     


@endsection