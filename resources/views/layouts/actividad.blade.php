@extends("layouts.plantilla")


@section("infoGeneral")
<h1>{{titulo}}</h1>

<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{portada}}" class="img-responsive portGral" alt="">
                </div>
            </header>
            <div class="info">
                <p class="pt-3">{{descripcion_actividad}}</p>
                <div class="clearfix"></div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Imágenes</h1>
                    <div>
                        <a href="http://localhost:8000/formImagen" class="btn btn-verde">Añadir imagen</a>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Comentarios</h1>
                    <div>
                        <a href="http://localhost:8000/formComentario" class="btn btn-verde">Añadir comentario</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
</div>
@endsection

