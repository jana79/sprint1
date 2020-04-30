@extends("layouts.plantilla")


@section("infoGeneral")
<h1>Bienvenido a Borja</h1>

<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{asset('images/borja.jpg')}}" 
                         class="img-fluid portGral" 
                         alt="Borja">
                </div>
            </header>
            <div>
                <p class="pt-3">Borja es un municipio de la Comarca del Campo de Borja,
                    en la provincia de Zaragoza, situada a 63 kilómetros de 
                    Zaragoza capital, y a una altitud de 448 metros sobre el 
                    nivel del mar. Su población se conoce con el gentilicio de
                    borjano.</p>

                <p>A sus excelentes vinos se suma una larga lista de monumentos 
                    llenos de historia.
                    La colegiata de Santa María concentra 
                    diferentes estilos, desde su creación, en el siglo XII, 
                    hasta el siglo XIX. Junto a ella se encuentra el Museo de 
                    arte religioso de la Colegiata. En la judería de Borja, 
                    junto a la plaza del Mercado, se levantan la casa-palacio 
                    de los Angulo y el torreón de los Borja, punto de visita 
                    ineludible.</p>
                <p>A unos cinco kilómetros del casco urbano 
                    encontrarás el conocido Santuario de la Misericordia, 
                    donde podrás contemplar el Ecce Homo de Borja, la pintura 
                    al fresco que dio la vuelta al mundo.</p>
                <p>Junto a su patrimonio artístico y monumental, Borja es 
                    conocida por su potente industria vitivinícola, que elabora
                    a partir de la variedad Garnacha. Unos caldos afrutados, 
                    equilibrados, integrados  en la Denominación de Origen Campo
                    de Borja. No te vayas sin visitar su Museo del Vino, que acogen
                    las dependencias del Monasterio de Veruela, y disfruta de 
                    experiencias únicas en las bodegas que forman parte de la 
                    Ruta de la Garnacha.</p>
                <p>Por otra parte, el entorno de la localidad ofrece varias rutas 
                    para hacer andando o en bicicleta.</p>
                <p>Para cualquier consulta puedes ponerte en contacto con la oficina
                    de turismo pulsando <a href="https://www.turismodearagon.com/
                                           oficina-turismo/oficina-de-turismo-de-borja">
                        aquí</a>.</p>
                <div class="clearfix"></div>
                <div class="col-12 d-flex justify-content-between pt-4">
                    <h1>Actividades en Borja</h1>
                    
                </div>
                <div class="row container mx-auto pt-2">
                    <div class="col-12 col-md-4">
                        <h4 class="h4 pb-3 pt-3 text-center verde">Ecce Homo</h4>
                        <img class="img-fluid" src="{{asset('images/ecceHomo.jpg')}}" 
                             alt="EcceHomo">
                        <p class="pt-4">En agosto de 2012, una vecina de Borja, Cecilia Giménez, 
                            situó al municipio zaragozano de Borja en el mapa mundial gracias a su 
                            singular restauración del Ecce Homo, una pintura mural de principios 
                            del siglo XX obra del artista aragonés Elías García Martínez y 
                            ubicada en el Santuario de Misericordia.</p>
                        <div class="d-flex justify-content-center py-3">
                            <a href="http://localhost:8000/poblaciones/borja/ecceHomo" 
                               class="btn btn-verde">
                                Ver actividad
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <h4 class="h4 pb-3 pt-3 text-center verde">Colegiata de Sta. María</h4>
                        <img class="img-fluid " src="{{asset('images/colegiata.jpg')}}" 
                             alt="Colegiata de Santa María">
                        <p class="pt-4">Entre los edificios históricos de Borja 
                            sobresale la colegiata de Santa María. Su variedad 
                            de estilos es resultado de una dilatada historia y 
                            de las distintas reformas y ampliaciones a las que 
                            ha sido sometida a lo largo de los siglos. Su variedad de 
                            estilos es resultado de una dilatada historia a través de
                            los siglos.</p>


                        <div class="d-flex justify-content-center py-3">
                            <a href="http://localhost:8000/poblaciones/borja/colegiataBorja" 
                               class="btn btn-verde">
                                Ver actividad
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <h4 class="h4 pb-3 pt-3 text-center verde">Museo del vino</h4>  
                        <img class="img-fluid " src="{{asset('images/museoVino.jpg')}}" 
                             alt="Museo del vino">
                        <p class="pt-4">Borja es territorio de vinos. La tradición 
                            del cultivo de viñedos y el establecimiento de bodegas 
                            está recogida en diversos documentos y archivos que 
                            nos remontan al año 1.100. Estas tierras se conocen 
                            hoy como ‘El Imperio de la Garnacha’ y tienen su propio 
                            museo. Visítalo y disfruta de una experiencia única.</p> 
                        <div class="d-flex justify-content-center py-3">
                            <a href="http://localhost:8000/poblaciones/borja/museoVino" 
                               class="btn btn-verde">
                                Ver actividad
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
</div>
@endsection

