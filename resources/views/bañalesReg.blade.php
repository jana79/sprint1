@extends("layouts.plantillaRegistrado")


@section("infoGeneral")
<h1>Los Bañales de Uncastillo</h1>

<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{asset('images/bañales.jpg')}}" 
                         alt="Bañales de Uncastillo" 
                         class="img-fluid portGral">
                </div>
            </header>
            <div>
                <p class="pt-3">Esta antigua ciudad romana debió formar parte 
                    del territorio que los textos clásicos atribuyen a los Vascones, 
                    un pueblo que ocupó los territorios de la actual Navarra y 
                    las Cinco Villas de Aragón.</p>
                <p>El yacimiento romano de Los Bañales se encuentra en el término 
                    municipal de Uncastillo, muy próximo a la localidad de Layana.</p>
                <p>Hasta el momento sólo ha sido estudiado con detalle su sistema 
                    hidráulico, dotado de unas monumentales termas, construidas 
                    a finales del siglo I d. C, y de un acueducto que transportaba 
                    el agua a la ciudad desde un posible embalse próximo.</p>
                <p>La ciudad de Los Bañales debió pertenecer a la jurisdicción 
                    de Caesaraugusta, formando parte del territorio que los textos 
                    clásicos atribuyen a los Vascones, un pueblo que ocupó los 
                    territorios de la actual Navarra y las Cinco Villas de Aragón 
                    hasta el río Gállego.</p>
                <p>En la actualidad, el yacimiento es objeto de un Plan de Investigación 
                    encargado por la Dirección General de Patrimonio del Gobierno 
                    de Aragón a la Fundación Uncastillo. A lo largo del año se 
                    organizan varias jornadas de puertas abiertas en las que el 
                    propio equipo científico del proyecto te guiará y te mostrará 
                    esta magnífica ciudad romana con foro, termas, espacios 
                    domésticos y un sensacional acueducto de abastecimiento de agua.</p>    
                
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

