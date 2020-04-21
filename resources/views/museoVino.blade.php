@extends("layouts.plantilla")


@section("infoGeneral")
<h1>Museo del vino D.O. Campo de Borja</h1>

<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{asset('images/museo-vino-borja.jpg')}}" alt="Museo del vino de Borja" class="img-responsive portGral">
                </div>
            </header>
            <div>
                <p class="pt-3">Este museo, en activo desde 1.994, fue uno de 
                    los primeros en este segmento. Gracias a su labor expositiva 
                    y divulgativa, se ha convertido en una herramienta de promoción 
                    y difusión importantísima, a través de la cual, miles de 
                    visitantes y turistas conocen y saben de las excelencias de 
                    los vinos del Campo de Borja y sus bodegas. De la misma forma, 
                    pone en valor los diferentes atractivos y recursos turísticos 
                    de la zona, complementando así la experiencia global de la 
                    visita a Borja.  El museo se estructura en tres plantas:
                    Planta Calle, Sala de Catas y Sala de D.O.
                    La visita al Museo del Vino comienza en la Sala de las Bodegas, 
                    donde se encuentra la información referente a las 17 entidades 
                    amparadas por esta denominación de origen y que podrás situar 
                    en el mapa que acompaña a este folleto. La sala de Catas 
                    permite a los asistentes seguir cursos sobre enología y viticultura. 
                    En la sala del Auditorio se proyecta un vídeo presentación:
                    ‘Tierras del Moncayo, territorio de leyenda’.
                    <span>Entreplanta (Área de Historia)</span>
                    Historia, arte y vino. La herencia del Moncayo. 
                    El Área de Historia muestra las principales manifestaciones 
                    históricas y artísticas del cultivo del viñedo y de la 
                    elaboración del vino, haciendo hincapié en la cultura 
                    vitivinícola de Campo de Borja a lo largo de la historia.
                    <span>Vid es vida</span>
                    A través del audiovisual “Vid es vida” se muestra el mágico 
                    camino de cómo, a partir de una pequeña semilla, se forma la 
                    vid con sus frutos y da comienzo a todo el proceso. 
                    <span>Planta Sótano (Área de Viticultura y Enología)</span>
                    De la Cepa a la copa - Variedades y morfología del vino
                    Incluya los procesos del ciclo de la vid: La vendimia, el 
                    acarreo, el Chof, el show de la garnachica, los trabajos 
                    en la bodega, la vinificación.
                    <span>El Teatro virtual y el taller de los sentidos</span>
                    Un original espacio que pone a prueba la sensibilidad de 
                    cada persona mostrando las sutilezas y matices del vino a 
                    través de sus percepciones sensoriales. Los colores, aromas 
                    y texturas del vino.</p>
               
                    Horario:
                <ul>
                    <li>De octubre a marzo: de 10.30 a 18.30 h.</li>
                    <li>De abril a septiembre: de 10.30 a 20.30 h.</li>
                    <li>Cerrado: martes (excepto festivos), 25 de diciembre y 1 de enero.</li>
                    <li>Las visitas podrán ser libres o guiadas. Si son guiadas hay que concertarlas previamente.</li>
                </ul>
                Tarifas*:
                <ul>
                    <li>Adultos: 1,80 €</li>
                    <li>Grupos (más de 25 pers.): 1,20 €/persona</li>
                    <li>Jubilados: 0,60 €</li>
                    <li>Menores de 11 años: gratis</li>
                    <li>*la entrada es conjunta Monasterio de Veruela + Museo del Vino</li>
                </ul>
                Contacto e Información:
                <ul>
                    <li>Tfn.: 976 198 825 / 976 852 122</li>
                    <li>web:<a href="http://docampodeborja.com/">www.docampodeborja.com</a></li>
                    <li>mail: museovino@docampodeborja.com</li>
                </ul>
                </p>
                <div class="clearfix"></div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Imágenes</h1>
                    <div>
                        <a href="http://localhost:8000/formImagen" class="btn btn-verde">Añadir imagen</a>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Comentarios</h1>
                    <div>
                        <a href="http://localhost:8000/formComentario" class="btn btn-verde">Añadir comentario</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
@endsection

