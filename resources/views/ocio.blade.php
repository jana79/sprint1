@extends("layouts.plantillaColaborador")


@section("infoGeneral")
<div>
    <h1>Actividades de Ocio</h1>
</div>
<p class="lead">Si estás buscando un plan para el fin de semana, 
    Semana Santa o incluso vacaciones, ¡estás en el sitio correcto!.</p>

<div class="row container mx-auto pt-3">
    <div class="col-12 col-md-4">
        <h4 class="h4 pb-3 pt-3 text-center verde">Survival Zombi</h4>
        <img class="imgInicio" src="{{asset('images/zombi.jpg')}}" 
             alt="Survival Zombi">
        <p class="pt-4">Las calles y rincones de Calatayud volverán a ser sede 
            de una nueva edición del evento 'Survival Zombie', que en esta ocasión 
            tendrá lugar el sábado 7 de noviembre de 2020. Desde las 21.00 a las 
            4.00 del domingo tendrán lugar la lucha por la superviviencia para
            acabar con los no muertos...</p>
        <div class="d-flex justify-content-center pb-3">
            <a href="http://localhost:8000/poblaciones/calatayud/zombi" 
               class="btn btn-verde">
                Ver actividad
            </a>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <h4 class="h4 pb-3 pt-3 text-center verde">Museo del vino</h4>  
        <img class="imgInicio" src="{{asset('images/museo-vino-borja.jpg')}}" 
             alt="Museo del vino">
        <p class="pt-4">Borja es territorio de vinos. La tradición 
            del cultivo de viñedos y el establecimiento de bodegas 
            está recogida en diversos documentos y archivos que 
            nos remontan al año 1.100. Estas tierras se conocen 
            hoy como ‘El Imperio de la Garnacha’ y tienen su propio 
            museo. Visítalo y disfruta de una experiencia única.</p> 
        <div class="d-flex justify-content-center pb-3">
            <a href="http://localhost:8000/poblaciones/borja/museoVino" 
               class="btn btn-verde">
                Ver actividad
            </a>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <h4 class="h4 pb-3 pt-3 text-center verde">Música Antigua</h4>  
        <img class="imgInicio" src="{{asset('images/musicaAntigua.jpg')}}" 
             alt="Festival de Música Antigua">
        <p class="pt-4">Iniciativa de la Institución Fernando el Católico y la 
            Diputación Provincial de Zaragoza, cada verano Daroca acoge una nueva
            edición del Festival de Música Antigua, una propuesta pionera y que 
            ha creado un modelo a seguir para otras muchas iniciativas que aunan
            cultura, ocio y turismo en el verano de la comunidad.</p>
        <div class="d-flex justify-content-center pb-3">
            <a href="http://localhost:8000/poblaciones/daroca/musicaAntigua" 
               class="btn btn-verde">
                Ver actividad
            </a>
        </div>
    </div>
</div>

@endsection