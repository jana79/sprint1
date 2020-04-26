@extends("layouts.plantilla")


@section("infoGeneral")
<h1>El Castillo de Mequinenza</h1>

<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{asset('images/mequinenza.jpg')}}" 
                         alt="Castillo de Mequinenza" 
                         class="img-responsive portGral">
                </div>
            </header>
            <div>
                <p class="pt-3">El Castillo de Mequinenza y sus aledaños son propiedad 
                    de la Fundación Endesa. Esta situado en lo alto de una colina, 
                    a unos 185 metros sobre el nivel del mar, enclave estratégico 
                    y único que ofrece una espectacular panorámica de las confluencias 
                    de los ríos Segre, Cinca y Ebro, más conocido como “Aiguabarreig”.</p>
                <p>Entre 1820 y 1823 adquirió un papel importante, soportando importantes 
                    ataques carlistas y conservando una pequeña guarnición militar 
                    que duró hasta principios del S. XX en el que el Castillo 
                    queda abandonado.</p>
                <p>Durante la guerra civil pasa a ser un Castillo de observación 
                    y una vez finalizada la guerra queda en ruinas hasta que la 
                    empresa ENHER lo reconstruye como residencia en 1959.</p>
                <p>La planta del castillo es una planta irregular reforzada en 
                    alzado por siete torreones, todos rectangulares excepto uno, 
                    el más robusto, que es curiosamente de planta pentagonal.</p>
                <p>Considerado hoy en día uno de los mejores castillos que el arte 
                    gótico legó a la Corona de Aragón, constituye el punto de 
                    interés más importante de Mequinenza.</p>
                <p>Para reservar visita guiada se ha de contactar con  
                    <a href="http://www.museosdemequinenza.com">Museos de Mequinenza</a>,
                    llamando al teléfono 974 46 47 05 de lunes a viernes de 10:00 a 
                    13:00 horas o a través de correo electrónico 
                    <a href="mailto: info@museosdemequinenza.com">info@museosdemequinenza.com</a> 
                    especificando en el asunto "Solicitud visita Castillo de Mequinenza".</p>
                <p>Las visitas guiadas, a las zonas delimitadas por la Fundación Endesa 
                    (no a todas las dependencias del edificio), son gratuitas y se realizan 
                    todos los martes laborables en horario de 10:30 a 12:30 horas 
                    a excepción del mes de agosto.</p>
                <p>Los grupos (de mínimo 10 personas) estarán acompañados por 
                    personal del Ayuntamiento de Mequinenza, encargados de llevarlas 
                    a cabo y deberán reservar su visita con 15 días de antelación.</p>
                
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

