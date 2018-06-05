@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="row">
    	    <div class="col-lg-12 margin-tb">
    	        <div class="pull-left">
                <h1>Crear evento </h1>
                <p class="lead">Llena los campos</p>
    	        </div>
    	        <div class="pull-right" >
    	            <a class="btn btn-primary" id='link' data-id='evento' onclick="atras()"> Atrás</a>
    	        </div>
    	    </div>
    	</div>

            @include("layouts.errors")

        <form method="POST" action='/evento/create' id='form' enctype="multipart/form-data" onsubmit='exito()'>
          {{ csrf_field() }}
        <div>

            <label for="titulo">Titulo</label>

            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Conferencia" required>

        </div>
        <hr>
        <div>

            <label for="descripcion">Descripción</label>

            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Este programa fue abierto en 2013, contiene ..." required>

        </div>


        <hr>

        <div class="form-control-file">
          <label for="poster">Póster</label>



            <input type="text" class="form-control" id="poster" name="poster" placeholder="https://www.Box.com/ejemplo" required>

        </div>

        <hr>

<ol style="list-style-type:none" id='listaFechas'>
  <li class='fecha'data-id='0'>
        <div class="row">
            <div class="col-lg-6 margin-tb">
                <div class="pull-left">
                  <label for="start">Inicio</label>

                  <input class='form-control-file'  id="start0" type="datetime-local" name="start[0]">
                </div>
                <div class="pull-right">
                  <label for="end">Fin</label>

                  <input class='form-control-file' id="end0" type="datetime-local" name="end[0]">

                </div>
            </div>

            <div class="col-lg-3 margin-tb">


                <label for="sede0">Sede</label><br>

                <select id="sede0" name="sede[0]" class='sede' data-id="@foreach ($sedes as $s)<option value='{{$s->id}}'>{{ $s->nombre }}</option>@endforeach">
                <!--  <option value='ninguno'>Ninguno</option> -->
                  @foreach ($sedes as $s)
                    <option value='{{$s->id}}'>{{ $s->nombre }}</option>
                  @endforeach
                </select>

            </div>
            <div class="col-lg-3 margin-tb">
              <br>
                <button type="button" id="botonFecha">Agrega otra fecha</button>
            </div>

        </div>
      </li>
    </ol>


        <hr>
        <div>
          <label for="color">Color</label>

          <input type="color" name="color" value="#ff4077">
        </div>

        <br>
        <button type="submit"  class="btn btn-primary">Crear</button>


      </form>

    </div><!-- /.container -->

@endsection


@include('layouts.footer')
