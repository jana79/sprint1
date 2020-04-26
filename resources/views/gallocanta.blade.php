@extends("layouts.plantilla")


@section("infoGeneral")
<h1>La Laguna de Gallocanta</h1>

<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{asset('images/gallocanta.jpg')}}" 
                         alt="Laguna de Gallocanta" 
                         class="img-responsive portGral">
                </div>
            </header>
            <div>
                <p class="pt-3">La Laguna de Gallocanta disfruta de un doble 
                    reconocimiento conservacionista, estando considerado como 
                    Humedal de Importancia Internacional (Convenio Ramsar) y 
                    Reserva Natural. Pero es por encima de todo el mayor humedal 
                    salino de la Península Ibérica y el mejor conservado de la 
                    Europa Occidental.</p>
                <p>A caballo entre las comarcas de Daroca y Jiloca, sobre una 
                    altiplanice a casi mil metros de altitud, sus aguas ocupan 
                    el fondo de una cuenca endorreica, sin salida hacia cauces 
                    fluviales. Sus dimensiones son notables: 7,5 Kilómetros de 
                    longitud por 2’5 kilómetros de anchura.La profundidad máxima 
                    en períodos de inundación puede superar los dos metros.</p>
                <p>Sin duda, uno de los elementos vivos más distintivos de la 
                    laguna son las aves, muy especialmente los llamativos bandos 
                    de grullas que año tras año recalan en estas tierras durante 
                    el trascurso de sus viajes migratorios. La gran mayoría de 
                    la población europea que se desplaza en la ruta occidental 
                    utiliza Gallocanta como área de descanso. Se han contabilizado 
                    hasta más de 114.800 ejemplares en una sola jornada ( 24/02/2011). 
                    Los bandos de grullas llegan de forma masiva al anochecer, 
                    siendo uno de los más impresionantes espectáculos visuales 
                    y sonoros de la naturaleza que capta la atención de numerosos 
                    visitantes que se acercan a ésta, durante los meses de noviembre 
                    a febrero. </p>
                <p>Pero no hay que olvidar que más de 220 especies de aves han 
                    sido citadas en la zona (entre nidificantes, invernantes o 
                    en paso) ni el bello entorno estepario, salpicado por carrizos, 
                    juncos y espadañas. Bajo el agua, se desarrollan praderas de 
                    macrófitos acuáticos como las “ovas”, vegetales de aspecto 
                    filamentoso que enraízan en los fondos lacustres.</p>
                <p>Más informacion en su <a href="http://www.rednaturaldearagon.com/
                                          centros/centro-de-interpretacion-de-la-laguna-
                                          de-gallocanta/">Centro de Interpretación</a>.</p>
                <div class="clearfix"></div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Imágenes</h1>
                    <div>
                        <a href="http://localhost:8000/formImagen" 
                           class="btn btn-verde">Añadir</a>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Comentarios</h1>
                    <div>
                        <a href="http://localhost:8000/formComentario" 
                           class="btn btn-verde">Añadir</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
@endsection

