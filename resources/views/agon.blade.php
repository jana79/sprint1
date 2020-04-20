@extends("layouts.plantilla")


@section("infoGeneral")
<h1>Bienvenido a Agon</h1>
<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="https://www.turismodezaragoza.es/provincia/img/003-00-0-0.jpg" class="img-responsive portGral" alt="Agón">
                </div>
            </header>
            <div class="info">
                <p>Agón es un municipio de la Comarca del Campo de Borja, en la
                    provincia de Zaragoza, Comunidad Autónoma de Aragón, que está 
                    situado a 63 kilómetros de Zaragoza, la capital, y a una 
                    altitud de 312 metros sobre el nivel del mar. Su población
                    se conoce con el gentilicio de agonero. Agón está situado a 
                    ambas orillas del río Huecha. En el siglo XV se reconstruye 
                    el primitivo Castillo del siglo XI. Sólo se conservan restos 
                    de la torre rectangular. En el siglo XVI se levanta la Iglesia 
                    Nuestra Señora de los Angeles. Entre las ruinas del despoblado 
                    de Gañarul, se encuentra exenta la Ermita de Nuestra Señora 
                    de Gañarul, pequeño templo parroquial de fábrica mudéjar,
                    actualmente en estado de ruina progresiva. Agón celebra fiestas
                    en honor a sus patrones San Pedro Mártir y Nuestra Señora de
                    los Ángeles.</p>
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