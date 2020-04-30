@extends("layouts.plantillaColaborador")


@section("infoGeneral")
<h1>Bienvenido a Agón</h1>
<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{asset('images/agon.jpg')}}" 
                         class="img-fluid portGral" 
                         alt="Agon">
                </div>
            </header>
            <div class="info">
                <p class="pt-3">Agón es un municipio de la Comarca del Campo de Borja, en la
                    provincia de Zaragoza,situado a 63 kilómetros de Zaragoza capital, 
                    y a una altitud de 312 metros sobre el nivel del mar. Su población
                    se conoce con el gentilicio de agonero.</p>
                <p>Agón está situado a ambas orillas del río Huecha. En el siglo XV 
                    se reconstruye el primitivo Castillo del siglo XI. Sólo se conservan
                    restos de la torre rectangular. En el siglo XVI se levanta la Iglesia 
                    Nuestra Señora de los Angeles.</p>
                <p>Entre las ruinas del despoblado de Gañarul, se encuentra exenta la Ermita de Nuestra Señora 
                    de Gañarul, pequeño templo parroquial de fábrica mudéjar, actualmente 
                    en estado de ruina progresiva.</p>
                <p>Agón celebra fiestas en honor a sus patrones San Pedro Mártir y Nuestra
                    Señora de los Ángeles.</p>
                <div class="clearfix"></div>
                <div class="col-12 d-flex justify-content-between">
                    <h1>Actividades en Agón</h1>
                    <div>
                        <a href="http://localhost:8000/colaborador/formActividad" 
                           class="btn btn-verde">Añadir</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>

@endsection