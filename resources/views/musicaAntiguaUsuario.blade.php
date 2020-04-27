@extends("layouts.plantillaColaborador")


@section("infoGeneral")
<h1>Festival de Música Antigua de Daroca</h1>

<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{asset('images/musicaAntigua.jpg')}}" 
                         alt="Festival de Música Antigua" 
                         class="img-responsive portGral">
                </div>
            </header>
            <div>
                <p class="pt-3">Iniciativa de la Institución Fernando el Católico 
                    y la Diputación Provincial de Zaragoza, cada verano Daroca 
                    acoge una nueva edición de los Cursos y Festivales de Música 
                    Antigua (CIMAD y FIMAD), una propuesta pionera y que ha creado 
                    un modelo a seguir para otras muchas iniciativas que aunan 
                    cultura, ocio y turismo en el verano de la comunidad.</p>
                <p>Durante los primeros días de agosto la ciudad acoge a una selecta 
                    nómina de profesores de música y alumnos llegados de todos 
                    los continentes para participar en una serie de clases 
                    magistrales.</p>
                <p>El ambiente durante esos días en Daroca es simplemente extraordinario.
                    La música de clases y ensayos puede escucharse en cualquier 
                    rincón de la ciudad, en cuyas calles decenas de jóvenes 
                    comparten con enorme intensidad una semana de música y convivencia.
                <p>De hecho, no es raro visitar alguna de las iglesias de la localidad 
                    para encontrar un ensayo o una clase a la que siempre que no 
                    se moleste, el visitante puede asistir como oyente.</p>
                <p>Por las noches, las dos principales iglesias de la ciudad sirven 
                    de escenario para los conciertos del Festival, siempre  dirigidos o 
                    interpretados por los propios profesores del curso.</p>
                <p>Los festivales tienen lugar la primera semana de agosto. La entrada 
                    es gratuita y suele habilitarse un autobús con salida y vuelta 
                    a Zaragoza antes y después de cada concierto.</p>
                <p>Más información: 
                    <a href="https://ifc.dpz.es">Institución Fernando El Católico</a>.</p>
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

