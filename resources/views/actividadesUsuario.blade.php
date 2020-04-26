@extends("layouts.plantillaColaborador")


@section("infoGeneral")
<h1>Bienvenido a la sección de Actividades</h1>
<p class="text-center">Encuentra tu próximo plan.</p>

<div class="row container mx-auto pt-4">
    <div class="col-12 col-md-6">  
        <h3 class="text-center verde py-3">Naturaleza</h3>
        <a href="http://localhost:8000/naturaleza"> 
            <img class="imgAct img-fluid" src="{{asset('../images/cascada_1.jpg')}}" 
                 alt="Naturaleza">
        </a>      
    </div>
    <div class="col-12 col-md-6"> 
       <h3 class="text-center verde py-3">Patrimonio</h3>
        <a href="http://localhost:8000/patrimonio"> 
            <img class="imgAct img-fluid" src="{{asset('../images/colegiataBorja.jpg')}}" 
                 alt="Patrimonio">
        </a>      
    </div>
</div>

<div class="row container mx-auto pt-4">
    <div class="col-12 col-md-6">  
        <h3 class="text-center verde py-3">Ocio</h3>
        <a href="http://localhost:8000/ocio"> 
            <img class="imgAct img-fluid" src="{{asset('../images/museo-vino-borja.jpg')}}" 
                 alt="Ocio">
        </a>        
    </div>
    <div class="col-12 col-md-6"> 
        <h3 class="text-center verde py-3">Tradición</h3>
        <a href="http://localhost:8000/tradicion"> 
            <img class="imgAct img-fluid" src="{{asset('../images/contradanza.jpg')}}" 
                 alt="Tradición">
        </a>      
    </div>
</div>


<div class="col-12 d-flex justify-content-center pt-5">
    <div>
        <a href="http://localhost:8000/formActividad" 
           class="btn btn-verde">Añadir actividad</a>
    </div>
</div>

@endsection