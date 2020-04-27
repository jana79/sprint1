@extends("layouts.plantillaColaborador")


@section("infoGeneral")
<h1>La Colegiata de Santa María de Borja</h1>

<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{asset('images/colegiataBorja.jpg')}}" 
                         alt="Colegiata de Santa María" 
                         class="img-responsive portGral">
                </div>
            </header>
            <div>
                <p class="pt-3">Levantada sobre un templo románico, la actual 
                    colegiata es fruto de tres intervenciones distintas que se 
                    llevaron a cabo en los años posteriores a la reconquista y 
                    en época mudéjar. La primera, consecuencia de la llamada 
                    ‘Guerra de lo Pedros’ y que dejó grandes desperfectos, 
                    la convirtió en un ejemplo de templo conocido como 
                    ‘iglesia fortaleza’.</p>
                <p>Hoy en día puede admirarse una tribuna defensiva en la zona 
                    que está junto al pórtico. Cuando fue nombrada colegiata se 
                    acometió la segunda actuación, ya que se construyo el claustro. 
                    A finales del siglo XVIII, el estado en el que se encontraba 
                    la nave central hizo necesaria una nueva actuación acorde a 
                    las técnicas de construcción y decoración de la época y que 
                    son las que se pueden apreciar hoy en día en el interior 
                    de la nave.</p>
                <p>La colegiata fue declarada Monumento Histórico Artístico Nacional
                    en 1982.</p>
                <p>Si observamos el edificio desde el exterior, destacan el pórtico 
                    y las dos torres. El pórtico, de relativamente reciente 
                    construcción (s. XIX), se levantó para sustituir a otro 
                    anterior que se encontraba en estado ruinoso. Junto al pórtico 
                    se encuentra un edificio del siglo XVI que fue sede del 
                    Hospital Sancti Spiritus y que hoy en día acoge el Museo 
                    de la Colegiata. Al otro lado del pórtico se encuentran los 
                    restos restaurados de la antigua iglesia-fortaleza y donde 
                    se adivinan los sillares del antiguo templo románico.</p>
                <p>Del interior de la iglesia destacan: el coro, un buen ejemplar 
                    de la sillería gótica aragonesa que tiene en el coro de la 
                    Seo sus orígenes, el órgano, el retablo mayor, la cripta y 
                    las capillas.</p>  
                <div>
                    <a href="http://localhost:8000/colaborador/editarActividad" 
                       class="btn btn-verde disabled">Editar</a>
                    <a href="http://localhost:8000/colaborador/eliminarActividad" 
                       class="btn btn-verde disabled">Eliminar</a>
                </div>
                <div class="clearfix"></div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Imágenes</h1>
                    <div>
                        <a href="http://localhost:8000/colaborador/formImagen" 
                           class="btn btn-verde disabled">Añadir</a>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Comentarios</h1>
                    <div>
                        <a href="http://localhost:8000/colaborador/formComentario" 
                           class="btn btn-verde disabled">Añadir</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <div class="col-lg-12 d-flex justify-content-end">
        <a href="http://localhost:8000/colaborador/poblaciones/borjaUsuario/conMuseo" 
           class="btn btn-verde disabled">Volver a población</a>
    </div>
</div>
@endsection

