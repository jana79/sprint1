@extends("layouts.plantilla")


@section("infoGeneral")
<h1>{{titulo}}</h1>

<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{portada}}" class="img-responsive portGral" alt="Abanto">
                </div>
            </header>
            <div class="info">
                <p>{{nom_usuario}}</p>
                <p>{{descripcion_actividad}}</p>
                <div class="clearfix"></div>
                <div class="col-12 d-flex justify-content-between">
                    <h1>Actividades en Acered</h1>
                    <div>
                        <a href="http://localhost:8000/formActividad" class="btn btn-verde">Añadir actividad</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
</div>
@endsection

