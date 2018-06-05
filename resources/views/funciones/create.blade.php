@extends('layouts.app')
@section('content')

@section('content')

    <div class="container">


      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Crear Nueva Función</h2>
            </div>
            <div class="pull-right">
              <a class="btn btn-primary" id='link' data-id='funciones' onclick="atras()"> Atrás</a>
            </div>
        </div>
    </div>





        @include("layouts.errors")

        <form method="POST" action='/funciones/create' id='form' enctype="multipart/form-data" onsubmit='exito()'>
          {{ csrf_field() }}










          <ol style="list-style-type:none" id='listaDocumentales'>
          <li class='documental'data-id='0'>
              <div class="row">
                <div class="col-lg-9 margin-tb">
                  <label for="datasheet0">Documental</label>

                  <select id="datasheet0" name="datasheet[0]" class='datasheet' required data-id="@foreach ($datasheet as $d)<option value='{{$d->id}}'>{{ $d->titulo }}</option>@endforeach">
                    @foreach ($datasheet as $d)
                      <option value='{{$d->id}}'>{{ $d->titulo }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-lg-3 margin-tb">

                    <button type="button" id="botonDocumental">Agrega otro documental </button>
                </div>

            </li>
          </ol>

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
