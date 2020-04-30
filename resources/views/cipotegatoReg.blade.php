@extends("layouts.plantillaRegistrado")


@section("infoGeneral")
<h1>El Cipotegato de Tarazona</h1>

<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{asset('images/cipotegato.jpg')}}" 
                         alt="Cipotegato de Tarazona" 
                         class="img-fluid portGral">
                </div>
            </header>
            <div>
                <p class="pt-3">
                <p>El Cipotegato de Tarazona, mítico personaje encapuchado y 
                    vestido de arlequín con los colores amarillo, verde y rojo, 
                    sale del ayuntamiento el 27 de agosto de cada año al son de 
                    las campanadas de las 12:00 horas, para iniciar su recorrido 
                    por diversas calles de la ciudad.</p>
                <p>Miles de personas se van concentrando en la plaza de España, 
                    esperando el momento de la salida del Cipotegato. 
                    Poco antes de las doce del mediodía comienzan ya a oírse los 
                    gritos de ¡¡cipote!!, ¡¡ cipote!! de la multitud que espera 
                    agolpada en la plaza</p>
                <p>. A las doce en punto del mediodía se abren las puertas del ayuntamiento 
                    y el Cipotegato irrumpe en la plaza a través de un pasillo 
                    abierto entre la multitud por su cuadrilla, y comienza su 
                    particular carrera por las calles de Tarazona perseguido por 
                    la multitud, y siendo el objetivo de miles de kilos de tomates 
                    lanzados por sus perseguidores.</p>
                <p>Bajo la intensa lluvia roja de tomates, el Cipotegato ayudado 
                    por sus amigos, antiguos Cipotegatos y peñistas, se abre paso 
                    entre la multitud para completar el recorrido que el mismo 
                    ha planeado, y que solo él conoce, para volver triunfante a 
                    la plaza donde es izado hasta la base de la estatua erigida 
                    en su honor, y será vitoreado por la multitud coreando su nombre, 
                    y desde allí es llevado a hombros hasta el interior del ayuntamiento.</p>
                <p>Las fiestas en honor de San Atilano han comenzado … </p> 
                
                <div class="clearfix"></div>
               <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Imágenes</h1>
                    <div class="my-auto">
                        <a href="#" 
                           class="btn btn-verde disabled">Añadir</a>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Comentarios</h1>
                    <div class="my-auto">
                        <a href="#" 
                           class="btn btn-verde disabled">Añadir</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <div class="col-lg-12 d-flex justify-content-end mt-4">
        <a href="#" 
           class="btn btn-verde disabled">Volver a población</a>
    </div>
</div>
@endsection

