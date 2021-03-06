@extends("layouts.plantilla")


@section("infoGeneral")
<h1>Bienvenido a {{nombre_poblacion}}</h1>

<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{imagen_poblacion}}" class="img-responsive" alt="">
                </div>
            </header>
            <div class="info">
                <p>{{descripcion_poblacion}}</p>
                <div class="clearfix"></div>
                <div class="col-12 d-flex justify-content-between">
                    <h1>Actividades en {{nombre_poblacion}}</h1>
                    <div>
                        <a href="http://localhost:8000/formActividad" class="btn btn-verde">Añadir actividad</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
@endsection

