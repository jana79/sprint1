@extends("layouts.plantillaRegistrado")


@section("infoGeneral")
<h1>Bienvenido a la sección de Actividades</h1>
<p class="text-center">Encuentra tu próximo plan.</p>

<div class="row container mx-auto pt-4">
    <div class="col-12 col-md-6">  
        <h3 class="text-center verde py-3">Naturaleza</h3>
        <a href="http://localhost:8000/registrado/naturaleza"> 
            <img class="imgAct img-fluid" src="{{asset('../images/cascada_1.jpg')}}" 
                 alt="Naturaleza">
        </a>      
    </div>
    <div class="col-12 col-md-6"> 
       <h3 class="text-center verde py-3">Patrimonio</h3>
        <a href="http://localhost:8000/registrado/patrimonio"> 
            <img class="imgAct img-fluid" src="{{asset('../images/colegiataBorja.jpg')}}" 
                 alt="Patrimonio">
        </a>      
    </div>
</div>

<div class="row container mx-auto pt-4">
    <div class="col-12 col-md-6">  
        <h3 class="text-center verde py-3">Ocio</h3>
        <a href="http://localhost:8000/registrado/ocio"> 
            <img class="imgAct img-fluid" src="{{asset('../images/museo-vino-borja.jpg')}}" 
                 alt="Ocio">
        </a>        
    </div>
    <div class="col-12 col-md-6"> 
        <h3 class="text-center verde py-3">Tradición</h3>
        <a href="http://localhost:8000/registrado/tradicion"> 
            <img class="imgAct img-fluid" src="{{asset('../images/contradanza.jpg')}}" 
                 alt="Tradición">
        </a>      
    </div>
</div>


@endsection