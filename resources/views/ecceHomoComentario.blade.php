@extends("layouts.plantillaRegistrado")


@section("infoGeneral")
<h1>Ecce Homo</h1>

<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{asset('images/ecceHomo.jpeg')}}" 
                         alt="EcceHomo" 
                         class="img-responsive portGral">
                </div>
            </header>
            <div>
                <p class="pt-3">En agosto de 2012, una vecina de Borja, Cecilia Giménez, 
                    situó al municipio zaragozano de Borja en el mapa mundial 
                    gracias a su singular restauración del Ecce Homo, una 
                    pintura mural de principios del siglo XX obra del artista 
                    aragonés Elías García Martínez y ubicada en el Santuario 
                    de Misericordia.</p>
                <p>La noticia del fallido intento de restauración no tardó en 
                    expandirse por las redes sociales y los medios de comunicación 
                    de todo el globo se hicieron eco del acontecimiento.</p>
                <p>El Ecce Homo de Borja se convirtió en poco tiempo en un 
                    fenómeno viral en Internet, los chistes y fotomontajes se 
                    propagaron como la espuma, llegando incluso a los programas 
                    de late night de la televisión americana.</p>
                <p>La repercusión mediática del fenómeno ha convertido el Ecce Homo 
                    en uno de los principales reclamos turísticos de Borja, por lo 
                    que se ha optado por dejar intacta la fallida restauración.</p>
                <p>Desde marzo de 2016, el Santuario de la Misercordia alberga un 
                    centro de interpretación dedicado al Eccehomo. En él se puede 
                    conocer la historia de dicha restauración, la biografía 
                    del autor y la restauradora, muestras de prensa, 
                    curiosidades y consejos para que los visitantes continúen 
                    su visita por Borja.</p>
                <p>Horario de visitas (Ecce Homo, Iglesia y Caserón):</p>
                <ul>
                    <li>Invierno, del 15 de septiembre al 30 de junio, todos los días de 10.30 a 13.30 y de 15.30 a 18.30 h.</li>
                    <li>Verano, del 1 de julio al 14 de septiembre, todos los días de 11.00 a 14.00 y de 16.30 a 20.00 h.</li>
                    <li>Navidad, días 24 y 31 de diciembre de 10.30 a 13.30 h. 25 de diciembre y 1 de enero CERRADO</li>
                    <li>Fiestas Locales: 4 de mayo y 21 de septiembre CERRADO</li>
                </ul>

                <p>Precio:</p>
                <ul>
                    <li>3 euros. La visita incluye: Iglesia, pintura Ecce Homo, Centro de Interpretación y Caserón.</li>
                </ul>

                <p>Contacto e Información:</p>
                <ul>
                    <li> Ayuntamiento - Tfn.: 976 852 001 Mail:<a href="mailto: ventanillaunica@borja.es"> ventanillaunica@borja.es</a></li>
                    <li>Oficina de Turismo – Tfn.: 662 347 611 Mail:<a href="mailto: turismo@borja.es"> turismo@borja.es</a></li>
                    <li>Santuario, Caserón – Tfn.: 607 391 752</li>
                </ul>

                <div class="clearfix"></div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Imágenes</h1>
                    <div class="my-auto">
                        <a href="http://localhost:8000/registrado/formImagen" 
                           class="btn btn-verde">Añadir</a>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Comentarios</h1>
                    <div class="my-auto">
                        <a href="http://localhost:8000/registrado/formComentario" 
                           class="btn btn-verde">Añadir</a>
                    </div>
                </div>
                <div class="row container mx-auto">
                    <div class="col-12">
                        <i class="fas fa-user verde"></i> lucas22
                        &nbsp;&nbsp; mayo 2020 
                    </div>
                    <p>Mi familia vive en Borja y siempre he disfrutado mucho del Santuario de la Misericordia. Y ahora el Santuario tiene un nuevo inquilino.
                        El paraje es espectacular. La pintura pues lo que es, algo curioso, pero que muestra la buena fe de la
                        gente (aunque a veces no sea suficiente con eso :P). Lo cierto es que disfrutamos mucho de la visita y el entorno.</p>
                </div>
                <div class="d-flex justify-content-end">
                    <div>
                        <a href="http://localhost:8000/registrado/editarComentario" 
                           class="btn btn-verde">Editar</a>
                        <a href="http://localhost:8000/registrado/eliminarComentario" 
                           class="btn btn-verde">Eliminar</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <div class="col-lg-12 d-flex justify-content-end mt-4">
        <a href="http://localhost:8000/registrado/poblaciones/borja" 
           class="btn btn-verde">Volver a población</a>
    </div>
</div>
@endsection

