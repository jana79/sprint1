@extends("layouts.plantillaColaborador")


@section("infoGeneral")
<h1>Survival Zombie en Calatayud</h1>

<div class="row">
    <div class="col-lg-12">
        <article>
            <header>
                <div class="item-img-wrap mb-4">
                    <img src="{{asset('images/zombi.jpg')}}" 
                         alt="Survival Zombi" 
                         class="img-fluid portGral">
                </div>
            </header>
            <div>
                <p class="pt-3">Bienvenidos a Invernalia. Las hordas de 
                    muertos nos asedian en la larga noche y solo el coraje y el 
                    honor nos salvarán.</p>
                <p>Solo si permanecemos juntos y luchamos juntos podremos evitar 
                    el desastre.</p>
                <p>Mientras más allá de las murallas los ejércitos se enfrentan 
                    con el grueso de los no muertos, dentro de la ciudad hemos de 
                    frenar el avance de la plaga con nuestros propios medios.</p>
                <p>Mientras el Rey de la Noche asedia nuestras murallas 
                    nosotros... ¡limpiaremos la ciudad calle por calle!</p>
                <p>Punto de encuentro: </p>
                <ul>
                    <li> Centro de Ocio Juvenil. Plaza la Correa, 5</li>
                </ul>

                <p>Horario:</p>
                <ul>
                    <li>Supervivientes: A partir de las 17:00</li>
                    <li>Zombies: A partir de las 20:00</li>
                </ul>

                <p>Puntos de venta:</p>
                <ul>
                    <li>Presencial:  Polideportivo Municipal	C/ Aragon s/n</li>
                    <li>Online: <a href="http://survivalzombie.es/survival/calatayud">
                            www.survivalzombie.es</a></li>
                </ul>
                <div>
                    <a href="http://localhost:8000/colaborador/editarActividad" 
                       class="btn btn-verde disabled">Editar</a>
                    <a href="http://localhost:8000/colaborador/eliminarActividad" 
                       class="btn btn-verde disabled">Eliminar</a>
                </div>
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

