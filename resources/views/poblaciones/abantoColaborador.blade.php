@extends("layouts.plantillaColaborador")


@section("infoGeneral")
<h1>Bienvenido a Abanto</h1>

<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{asset('images/abanto.jpg')}}" 
                         class="img-fluid portGral" 
                         alt="Abanto">
                </div>
            </header>
            <div class="info">
                <p class="pt-3">Abanto es un municipio de la Comarca de 
                    Calatayud, en la provincia de Zaragoza. Está situado a 130 kilómetros 
                    de Zaragoza capital, y a una altitud de 922 metros 
                    sobre el nivel del mar. Su población se conoce con el 
                    gentilicio de abantino. 
                    <p>Abanto está situado en la ladera de un cerro de la margen 
                        derecha del río Ortiz, al sur de la sierra de Pardos. 
                        En el siglo XVIII se levanta la Iglesia de Nuestra Señora 
                        de la Asunción, también conocida como Iglesia de San 
                        Bernardo. Conserva dos ermitas, la Ermita de San Fabián 
                        y San Sebastián.</p>
                    <p>El despoblado de Pardos pertenece al municipio de Abanto.</p>
                    <p>Abanto celebra fiestas en honor a su patrón San Estebán.</p>
                <div class="clearfix"></div>
                <div class="col-12 d-flex justify-content-between pt-4">
                    <h1>Actividades en Abanto</h1>
                    <div>
                        <a href="http://localhost:8000/colaborador/formActividad" class="btn btn-verde">Añadir</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
</div>
@endsection

