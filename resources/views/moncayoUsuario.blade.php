@extends("layouts.plantillaColaborador")


@section("infoGeneral")
<h1>AG2: Desde Agramonte a la Fuente de la Teja</h1>

<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{asset('images/moncayo.jpg')}}" 
                         alt="Moncayo" 
                         class="img-responsive portGral">
                </div>
            </header>
            <div>
                <p class="pt-3">Paseo suave desde el entorno de Agramonte hasta 
                    el paraje de la Fuente de la Teja, que dispone de un área 
                    recreativa bajo un espectacular hayedo.</p>
                <p>El sendero atraviesa además uno de los hábitat de mayor interés 
                    del Parque Natural, el abedular.</p>
                <p>El recorrido es circular y no tiene mucho desnivel, aunque
                    aunque hay que llevar buen calzado porque el terreno es bastante
                    pedregoso.</p>
                <p>También es importante llevar agua, especialmente en
                    los meses de verano.</p>
                <p>A lo largo del recorrido se puede disfrutar de la observación 
                    de gran variedad de especies de flora, estando las más 
                    representativas señalizadas para su identificación.</p>

                <a href="http://www.rednaturaldearagon.com/wp-content/uploads/2017/01/moncayo_2.pdf">
                    Descarga la información del sendero</a>
                <div class="mt-4">
                    <a href="http://localhost:8000/colaborador/editarActividad" 
                       class="btn btn-verde disabled">Editar</a>
                    <a href="http://localhost:8000/colaborador/eliminarActividad" 
                       class="btn btn-verde disabled">Eliminar</a>
                </div>
                <div class="clearfix"></div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Imágenes</h1>
                    <div>
                        <a href="http://localhost:8000/formImagen" 
                           class="btn btn-verde disabled">Añadir</a>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Comentarios</h1>
                    <div>
                        <a href="http://localhost:8000/formComentario" 
                           class="btn btn-verde disabled">Añadir</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <div class="col-lg-12 d-flex justify-content-end">
        <a href="http://localhost:8000/colaborador/poblaciones/borjaUsuario/conMuseo" 
           class="btn btn-verde disabled">Volver a población</a>
    </div>
</div>
@endsection

