@extends("layouts.plantillaAdmin")


@section("infoGeneral")
<h1>Usuarios de la aplicación</h1>

<div class="container row mt-3 mb-5 shadow py-5 px-5 
     d-flex justify-content-center text-center">
    <table class="table-bordered table-hover py-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo</th>      
                <th>Nombre_usuario</th>
                <th>Tipo de contenido</th>
                <th>Contenido</th>
                <th>Bloqueado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Colaborador</td>
                <td>pegilba</td>
                <td>Actividad</td>
                <td>Museo del vino D.O. Campo de Borja
                    Este museo, en activo desde 1.994, fue uno de los 
                    primeros en este segmento. Gracias a su labor 
                    expositiva y divulgativa, se ha convertido en una 
                    herramienta de promoción y difusión importantísima, 
                    a través de la cual, miles de visitantes y turistas 
                    conocen y saben de las excelencias de los vinos del 
                    Campo de Borja y sus bodegas.</td>
                <td class="btn btn-danger mt-5">Bloqueado</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Colaborador</td>
                <td>Mulis77</td>
                <td>Actividad</td>
                <td>Survival Zombi en Calatayud
                    Bienvenidos a Invernalia. Las hordas de muertos nos 
                    asedian en la larga noche y solo el coraje y el honor 
                    nos salvarán. Solo si permanecemos juntos y luchamos 
                    juntos podremos evitar el desastre. Mientras más allá 
                    de las murallas los ejércitos se enfrentan con el 
                    grueso de los no muertos, dentro de la ciudad hemos 
                    de frenar el avance de la plaga con nuestros propios 
                    medios. Mientras el Rey de la Noche asedia nuestras 
                    murallas nosotros... ¡limpiaremos la ciudad calle por 
                    calle!.</td>
                <td> </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Registrado</td>
                <td>lucas22</td>
                <td>Comentario</td>
                <td>Hicimos la ruta el pasado mes de octubre y fue una
                    experiencia estupenda. El sendero es llano, aunque es 
                    cierto que bastante pedregoso, por lo que es muy recomendable
                    llevar calzado que sujete bien los tobillos. Tuvimos mucha
                    suerte con el tiempo, pero no tanto con la cámara de fotos.
                    Volveremos para poder captar toda esa belleza.</td>
                <td> </td>
            </tr>
        </tbody>
    </table>       
</div>
<div class="d-flex justify-content-center">
    <a href="http://localhost:8000/admin/listadoUsuarios" 
       class="btn btn-verde">
        Volver
    </a>         
</div>

@endsection

