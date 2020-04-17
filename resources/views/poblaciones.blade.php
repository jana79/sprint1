@extends("layouts.plantilla")


@section("infoGeneral")
<h1>Bienvenido a la sección Poblaciones</h1>
<p>Aquí encontrarás las poblaciones de la provincia de Zaragoza ordenadas alfabéticamente.
    Haz clic sobre el nombre para ver la población y las actividades que ofrece.</p>
<div class="container shadow p-5 my-5">
    <h3 class="display-4 mb-5 text-center">Gatos que están deseando conocerte</h3>
    <p class="mt-5 mb-5 text-center">Haz clic sobre la fila que quieras para ver una foto del gatito.</p>
    <table id="poblaciones" class="table table-striped table-bordered w-100 dt-responsive nowrap">
        <thead>
            <tr>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>		            
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
            </tr>
        </tfoot>
    </table>
</div>

<!--
<div class="row pt-5">
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>A</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>B</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>C</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>D</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>E</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>F</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>G</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>H</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>I</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>J</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>L</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>M</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>N</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>O</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>P</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>Q</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>R</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>S</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>T</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>U</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>V</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div> 

    <div class="col-lg-3 col-md-4 col-sm-6">
        <h4>Z</h4>
        <ul>
            <li><a href="http://localhost:8000/poblaciones/albeta">Albeta </a></li>
            <li><a href="http://localhost:8000/poblaciones/anento">Anento</a></li>
            <li><a href="http://localhost:8000/poblaciones/alfamen">Alfamén</a></li>
        </ul>        
    </div>      
</div>-->

@endsection