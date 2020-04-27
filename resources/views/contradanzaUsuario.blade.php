@extends("layouts.plantillaColaborador")


@section("infoGeneral")
<h1>La Contradanza de Cetina</h1>

<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{asset('images/contradanza.jpg')}}" 
                         alt="Contradanza" 
                         class="img-responsive portGral">
                </div>
            </header>
            <div>
                <p class="pt-3">La Contradanza de Cetina es una expresión 
                    espectacular única, que se representa en Cetina la noche del
                    19 de Mayo en honor de San Juan Lorenzo.</p>
                <p>El personaje llamado “el diablo” es el que dirige el baile 
                    con sus palmadas y órdenes para dar comienzo a las mudanzas 
                    (cuadros plásticos) que se van desgranando por parte de los 
                    otros ocho “contradanceros” (cuatro visten de negro con 
                    adornos blancos y cuatro de blanco con adornos negros), 
                    que cubiertos sus rostros con una “careta” van plasmando 
                    las figuras.</p>
                <p>El diablo siempre corona las figuras, ya sean de tipo laico 
                    (Los arcos, los estribos, los banquillos, la fuente, el surtidor…), 
                    mitológico (el dios de las aguas), y sobre todo religioso 
                    (San Juan Lorenzo, la Virgen de Atocha, San Pascual, 
                    la Purísima, el Calvario, la Resurrección…).</p>
                <p>Como nota curiosa, en la única que aparece el Demonio propiamente 
                    dicha es la mudanza de San Miguel, y en ella, el diablo 
                    precisamente hace de San Miguel para dar muerte al Lucifer 
                    que es interpretado por otro contradancero.</p>
                <p>El diablo, por tanto, lejos de ser un ser diabólico es un ser inquieto, 
                    que sube, baja, danza sin parar... Que juega con los 
                    contradanceros, que les quiere engañar y finalmente 
                    (durante la pantomima del “afeitado”) es muerto a mano de 
                    uno de ellos. Es llorado con llantos burlescos, paseado 
                    triunfante ante el pueblo y finalmente resucita, la música 
                    se acelera, y en un cúlmen de palmas y excitación de todo 
                    el pueblo la Contradanza termina con el grito estentóreo 
                    de “¡¡¡Viva San Juan Lorenzo!!!"</p>  
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
                        <a href="http://localhost:8000/formImagen" 
                           class="btn btn-verde disabled">Añadir</a>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-between pt-3">
                    <h1>Comentarios</h1>
                    <div>
                        <a href="http://localhost:8000/formComentario" 
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

