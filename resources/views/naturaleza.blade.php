@extends("layouts.plantilla")


@section("infoGeneral")
<div>
    <h1>Actividades de Naturaleza</h1>
</div>
<p class="lead">Si estás buscando un plan para el fin de semana, 
    Semana Santa o incluso vacaciones, ¡estás en el sitio correcto!.</p>

<div class="row container mx-auto pt-3">
    <div class="col-12 col-md-4">
        <h4 class="h4 pb-3 text-center verde">Laguna de Gallocanta</h4>
        <img class="img-fluid" src="{{asset('images/gallocanta.jpg')}}" 
             alt="Grullas en la Laguna de Gallocanta">
        <p class="pt-4">La reserva natural de la Laguna de Gallocanta se 
            encuentra entre las comarcas de Campo de Daroca y Jiloca. Cuenta 
            con más de 220 especies de aves (como águilas, buitres y grullas) 
            y constituye el enclave más importante de aves acuáticas de Aragón 
            y el segundo de la península ibérica después de Doñana </p>
        <div class="d-flex justify-content-center pb-3">
            <a href="http://localhost:8000/poblaciones/daroca/gallocanta" 
               class="btn btn-verde">
                Ver actividad
            </a>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <h4 class="h4 pb-3 text-center verde">Monasterio de Piedra</h4>
        <img class="img-fluid" src="{{asset('images/monPiedra.jpg')}}" 
             alt="Monasterio de Piedra">
        <p class="pt-4">En la localidad de Nuévalos, a escasos kilómetros de Calatayud, 
                    se emplaza el famoso Monasterio de Piedra, un antiguo cenobio 
                    cisterciense ubicado en un hermoso parque natural repleto de 
                    cascadas, bellísimos saltos de agua y grutas. Se trata de uno 
                    de los parajes más bellos y visitados de Aragón.</p>
        <div class="d-flex justify-content-center pb-3">
            <a href="http://localhost:8000/poblaciones/nuevalos/monPiedra" 
               class="btn btn-verde">
                Ver actividad
            </a>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <h4 class="h4 pb-3 text-center verde">Senderos del Moncayo: AG2</h4>  
        <img class="img-fluid" src="{{asset('images/moncayo.jpg')}}" 
             alt="Moncayo">
        <p class="pt-4">El Parque Natural del Moncayo es uno de los Espacios 
            Naturales Protegidos de Aragón certificado con la Q de Calidad 
            Turística, un distintivo que garantiza unos niveles de calidad 
            óptimos en los equipamientos y servicios de atención a los visitantes.
            Vamos desde Agramonte hasta la Fuente de la Teja por el sendero AG2.</p>
        <div class="d-flex justify-content-center">
            <a href="http://localhost:8000/poblaciones/agramonte/rutaAG2" 
               class="btn btn-verde">
                Ver actividad
            </a>
        </div>
    </div>
</div>

@endsection