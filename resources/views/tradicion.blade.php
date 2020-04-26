@extends("layouts.plantilla")


@section("infoGeneral")
<div>
    <h1>Actividades de Tradición</h1>
</div>
<p class="lead">Si estás buscando un plan para el fin de semana, 
    Semana Santa o incluso vacaciones, ¡estás en el sitio correcto!.</p>

<div class="row container mx-auto pt-3">
    <div class="col-12 col-md-4">
        <h4 class="h4 pb-3 text-center verde">La Máscara de Ateca</h4>
        <img class="imgInicio" src="{{asset('images/mascara.jpg')}}" 
             alt="Máscara de Ateca">
        <p class="pt-4">Tras el solsticio de invierno, las hogueras de enero y principios 
            de febrero calientan el ambiente festivo y nos preparan para el carnaval. 
            La Máscara de Ateca, declarada Fiesta de Interés Turístico de Aragón se
            celcebra los días 2 y 3 de febrero, aunando las festividades del día de 
            las Candelas y de san Blas, patrón de Ateca.</p>
        <div class="d-flex justify-content-center pb-3">
            <a href="http://localhost:8000/poblaciones/ateca/mascara" 
               class="btn btn-verde">
                Ver actividad
            </a>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <h4 class="h4 pb-3 text-center verde">El Cipotegato</h4>
        <img class="imgInicio" src="{{asset('images/cipotegato.jpg')}}" 
             alt="Cipotegato de Tarazona">
        <p class="pt-4">El Cipotegato es la tradición más popular de la ciudad 
            de Tarazona. Cada año, del 27 de agosto al 1 de septiembre, 
            el pueblo se viste de fiesta para homenajear a su patrón San Atilano. 
            Desde el 2009, el Cipotegato se ha convertido en Fiesta de Interés 
            Turístico Nacional. ¡¡No te olvides de los tomates!!</p>
        <div class="d-flex justify-content-center pb-3">
            <a href="http://localhost:8000/poblaciones/tarazona/cipotegato" 
               class="btn btn-verde">
                Ver actividad
            </a>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <h4 class="h4 pb-3 text-center verde">La Contradanza</h4>  
        <img class="imgInicio" src="{{asset('images/contradanza.jpg')}}" 
             alt="Contradanza de Cetina">
        <p class="pt-4">La Contradanza de Cetina es una expresión espectacular 
            única, que se representa en Cetina la noche del 19 de Mayo en honor 
            de San Juan Lorenzo. El personaje llamado “el diablo” es el que dirige 
            el baile con sus palmadas y órdenes para dar comienzo a las mudanzas,
            realizadas por los otros ocho "contradanceros".</p>
        <div class="d-flex justify-content-center">
            <a href="http://localhost:8000/poblaciones/cetina/contradanza" 
               class="btn btn-verde">
                Ver actividad
            </a>
        </div>
    </div>
</div>

@endsection