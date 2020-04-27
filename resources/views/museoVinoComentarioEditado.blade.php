@extends("layouts.plantillaColaborador")


@section("infoGeneral")
<h1>Museo del vino D.O. Campo de Borja</h1>

<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{asset('images/museo-vino-borja.jpg')}}" 
                         alt="Museo del vino de Borja" 
                         class="img-responsive portGral">
                </div>
            </header>
            <div>
                <p class="pt-3">Este museo, en activo desde 1.994, fue uno de 
                    los primeros en este segmento. Gracias a su labor expositiva 
                    y divulgativa, se ha convertido en una herramienta de promoción 
                    y difusión importantísima, a través de la cual, miles de 
                    visitantes y turistas conocen y saben de las excelencias de 
                    los vinos del Campo de Borja y sus bodegas.</p>
                <p>De la misma forma, pone en valor los diferentes atractivos y 
                    recursos turísticos de la zona, complementando así la 
                    experiencia global de la visita a Borja.</p>
                <p>El museo se estructura en tres plantas:
                    Planta Calle, Sala de Catas y Sala de D.O.</p>
                <p>La visita al Museo del Vino comienza en la Sala de las Bodegas, 
                    donde se encuentra la información referente a las 17 entidades 
                    amparadas por esta denominación de origen y que podrás situar 
                    en el mapa que acompaña a este folleto.</p>
                <p>La sala de Catas permite a los asistentes seguir cursos sobre 
                    enología y viticultura.</p>
                <p>En la sala del Auditorio se proyecta un vídeo presentación:
                    ‘Tierras del Moncayo, territorio de leyenda’.</p>
                <p>Horario:</p>
                <ul>
                    <li>De octubre a marzo: de 10.30 a 18.30 h.</li>
                    <li>De abril a septiembre: de 10.30 a 20.30 h.</li>
                    <li>Cerrado: martes (excepto festivos), 25 de diciembre y 1 de enero.</li>
                    <li>Las visitas podrán ser libres o guiadas. Si son guiadas hay que concertarlas previamente.</li>
                </ul>

                <p>Tarifas*:</p>
                <ul>
                    <li>Adultos: 1,80 €</li>
                    <li>Grupos (más de 25 pers.): 1,20 €/persona</li>
                    <li>Jubilados: 0,60 €</li>
                    <li>Menores de 11 años: gratis</li>
                    <li>*la entrada es conjunta Monasterio de Veruela + Museo del Vino</li>
                </ul>

                <p>Contacto e Información:</p>
                <ul>
                    <li>Tfn.: 976 198 825 / 976 852 122</li>
                    <li>web:<a href="http://docampodeborja.com/">www.docampodeborja.com</a></li>
                    <li>mail: museovino@docampodeborja.com</li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="col-12 d-flex justify-content-between pt-3">
                <h1>Imágenes</h1>
                <div>
                    <a href="http://localhost:8000/formImagen" 
                       class="btn btn-verde">Añadir</a>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-between pt-5">
                <h1>Comentarios</h1>
                <div>
                    <a href="http://localhost:8000/formComentario" 
                       class="btn btn-verde">Añadir</a>
                </div>
            </div>
            <div class="row container mx-auto">
                <div class="col-12">
                    <i class="fas fa-user verde"></i> pegilba
                    &nbsp;&nbsp; mayo 2020 
                </div>
                <p>Hicimos la visita en pareja en septiembre de 2018. La verdad es que
                    el museo está muy bien cuidado. Tienen muchos paneles informativos 
                    y la guía que nos lo mostró fue muy simpática. La duración fue de
                    casi dos horas y nos pareció una experiencia muy enriquecedora
                    y recomendable. Además tienen una tienda con productos de la tierra
                    y organizan catas y otras actividades. Para no perdérselo.</p>
            </div>
            <div class="d-flex justify-content-end">
                <div>
                    <a href="http://localhost:8000/colaborador/editarComentario" 
                       class="btn btn-verde">Editar</a>
                    <a href="http://localhost:8000/colaborador/eliminarComentario" 
                       class="btn btn-verde">Eliminar</a>
                </div>
            </div>
        </article>
    </div>
</div>
</article>
</div>
</div>
@endsection

