@extends("layouts.plantillaColaborador")


@section("infoGeneral")
<h1>El Monasterio de Piedra</h1>

<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{asset('images/monPiedra.jpg')}}" 
                         alt="Monasterio de Piedra" 
                         class="img-fluid portGral">
                </div>
            </header>
            <div>
                <p class="pt-3">En la localidad de Nuévalos, a escasos kilómetros 
                    de Calatayud, se emplaza el famoso Monasterio de Piedra, un 
                    antiguo cenobio cisterciense ubicado en un hermoso parque 
                    natural repleto de cascadas, bellísimos saltos de agua y grutas.
                    Se trata de uno de los parajes más bellos y visitados de Aragón.</p>
                <p>El parque natural es un remanso de paz, un lugar ideal para relajarte, 
                    dejándote llevar por el rumor del agua que desciende por las 
                    diferentes cascadas. La llamada Cola de Caballo es la más famosa.
                    En su interior existe una gran cueva natural con formaciones 
                    de estalactitas. En contraste con las cascadas podrás admirar 
                    las tranquilas aguas del Lago del Espejo.</p>
                <p> La primera impresión que tendrás al llegar aquí será la de 
                    sorpresa. Sorpresa al descubrir este insólito vergel donde 
                    el agua y la abundante vegetación reinan en medio de un 
                    paisaje árido. La misma sorpresa se encontraron los monjes 
                    que llegaron hasta este lugar y fundaron un monasterio 
                    cisterciense, allá por el siglo XII.</p>
                <p>Algunas de sus estancias se pueden visitar todavía hoy, 
                    como el claustro, la sala capitular, la cocina donde se elaboró 
                    el primer chocolate de Europa, la iglesia y su cripta, el 
                    refectorio o el lavatorio.</p>
                <p>Puedes complementar tu visita disfrutando de una exhibición 
                    de aves rapaces y recorriendo el Museo del Vino de la 
                    Denominación de Origen Calatayud, situado en la antigua 
                    bodega del monasterio.</p>
                <p>Para más información sobre rutas, entradas e inscripción en actividades
                    visita <a href="https://monasteriopiedra.com/parque">
                        Parque del Monasterio de Piedra</a>.</p>
                <div>
                    <a href="http://localhost:8000/colaborador/editarActividad" 
                       class="btn btn-verde disabled">Editar</a>
                    <a href="http://localhost:8000/colaborador/eliminarActividad" 
                       class="btn btn-verde disabled">Eliminar</a>
                </div>
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

