@extends("layouts.plantillaRegistrado")


@section("infoGeneral")
<div>
    <h1>Actividades de Patrimonio</h1>
</div>
<p class="lead">Si estás buscando un plan para el fin de semana, 
    Semana Santa o incluso vacaciones, ¡estás en el sitio correcto!.</p>

<div class="row container mx-auto pt-3">
    <div class="col-12 col-md-4">
        <h4 class="h4 pb-3 text-center verde">Los Bañales de Uncastillo</h4>
        <img class="imgInicio" src="{{asset('images/bañales.jpg')}}" 
             alt="Los Bañales de Uncastillo">
        <p class="pt-4">Los Bañales es un yacimiento arqueológico
        donde se han hallado restos de una ciudad romana. Visita este magnífico 
        yacimiento con foro, termas, espacios domésticos y un sensacional 
        acueducto de abastecimiento de agua.El yacimiento romano de Los Bañales 
        se encuentra en el término municipal de Uncastillo.</p>
        <div class="d-flex justify-content-center pb-3">
            <a href="http://localhost:8000/registrado/poblaciones/uncastillo/bañales" 
               class="btn btn-verde">
                Ver actividad
            </a>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <h4 class="h4 pb-3 text-center verde">Colegiata de Santa María</h4>
        <img class="imgInicio" src="{{asset('images/colegiataBorja.jpg')}}" 
             alt="Colegiata de Santa María">
        <p class="pt-4">Entre los edificios históricos de Borja 
            sobresale la colegiata de Santa María. Su variedad 
            de estilos es resultado de una dilatada historia y 
            de las distintas reformas y ampliaciones a las que 
            ha sido sometida a lo largo de los siglos. Su variedad de 
            estilos es resultado de una dilatada historia a través de
            los siglos.</p>


        <div class="d-flex justify-content-center pb-3">
            <a href="http://localhost:8000/registrado/poblaciones/borja/colegiata" 
               class="btn btn-verde">
                Ver actividad
            </a>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <h4 class="h4 pb-3 text-center verde">El castillo de Mequinenza</h4>  
        <img class="imgInicio" src="{{asset('images/mequinenza.jpg')}}" 
             alt="Castillo de Mequinenza">
        <p class="pt-4">El Castillo de Mequinenza y sus aledaños son propiedad de 
            la Fundación Endesa. Esta situado en lo alto de una colina, a unos 185 
            metros sobre el nivel del mar, enclave estratégico y único que ofrece 
            una espectacular panorámica de las confluencias de los ríos Segre, Cinca 
            y Ebro, más conocido como “Aiguabarreig”</p>
        <div class="d-flex justify-content-center">
            <a href="http://localhost:8000/registrado/poblaciones/mequinenza/castillo" 
               class="btn btn-verde">
                Ver actividad
            </a>
        </div>
    </div>
</div>

@endsection