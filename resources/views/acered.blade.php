@extends("layouts.plantilla")


@section("infoGeneral")
<h1>Bienvenido a Acered</h1>
<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="https://www.turismodezaragoza.es/provincia/img/002-00-0-0.jpg" class="img-responsive portGral" alt="Acered">
                </div>
            </header>
            <div class="info">
                <p>Acered es un municipio de la Comarca del Campo de Daroca, en
                    la provincia de Zaragoza, Comunidad Autónoma de Aragón, que
                    está situado a 110 kilómetros de Zaragoza, la capital, y a
                    una altitud de 835 metros sobre el nivel del mar. Su población
                    se conoce con el gentilicio de aceredano o aceredino. Acered 
                    está situado en la ladera de la sierra de Santa Cruz. El primitivo 
                    Castillo situado en un cerro de fuerte pendiente cerca del arroyo 
                    de Valdevivas, conserva únicamente restos de cimientos de una 
                    torre defensiva. Destacan los volúmenes de la Iglesia de la 
                    Asunción de Nuestra Señora templo barroco del siglo XVII. En la 
                    calle Paradero hay una Fuente del siglo XVII que surte de agua 
                    al lavadero de planta rectangular, construido en el siglo XX.
                    Tiene varias ermitas como la Ermita de la Virgen de Semón, 
                    templo barroco levantado en mampostería en el siglo XVII,
                    la Ermita del Santo Sepulcro o de la Soledad, o la Ermita de
                    San Roque. Acered celebra fiestas en honor a su patrona 
                    Nuestra Señora del Semón.</p>
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

@endsection

