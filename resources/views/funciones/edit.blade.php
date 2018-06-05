@extends('layouts.app')
@section('content')

    <div class="container">

     <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modificar Función</h2>
            </div>
            <div class="pull-right">
              <a class="btn btn-primary" id='link' data-id='funciones' onclick="atras()"> Atrás</a>
            </div>
        </div>
    </div>



        @include("layouts.errors")
        <form method="POST" action='/funciones/{{$funcion->id}}/edit' id='form' enctype="multipart/form-data" onsubmit='exito()'>
          {{ csrf_field() }}

          <ol style="list-style-type:none" id='listaDocumentales'>
            @foreach ($datasheets as $key => $dt)

          <li class='documental'data-id='{{$key}}'>
              <div class="row">
                <div class="col-lg-9 margin-tb">
                  <label for="datasheet0">Documental</label>

                  <select id="datasheet{{$key}}" name="datasheet[{{$key}}]" class='datasheet' required data-id="@foreach ($datasheet as $d)<option value='{{$d->id}}'>{{ $d->titulo }}</option>@endforeach">
                    @foreach ($datasheet as $d)
                      @if($d->id==$dt->datasheet_id)
                      <option value='{{$d->id}}' selected>{{ $d->titulo }}</option>

                      @else
                      <option value='{{$d->id}}'>{{ $d->titulo }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
                <div class="col-lg-3 margin-tb">



                    @if($key==0)
                    <button type="button" id="botonDocumental">Agrega otro documental </button>
                    @else
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"  id="botonEliminarDocu"></span>
                    @endif
                </div>

            </li>
            @endforeach

          </ol>





          <hr>




          <ol style="list-style-type:none" id='listaFechas'>
            @foreach ($fechas as $key => $fecha)
            <li class='fecha'data-id='{{$key}}' >
                  <div class="row">
                      <div class="col-lg-6 margin-tb">
                          <div class="pull-left">
                            <label for="start">Inicio</label>

                            <input class='form-control-file'  id="start{{$key}}" type="datetime-local" name="start[{{$key}}]" value="{{$start_date[$key]}}">
                          </div>
                          <div class="pull-right">
                            <label for="end">Fin</label>

                            <input class='form-control-file' id="end{{$key}}" type="datetime-local" name="end[{{$key}}]" value="{{$end_date[$key]}}">

                          </div>
                      </div>

                      <div class="col-lg-3 margin-tb">


                          <label for="sede{{$key}}">Sede</label><br>

                          <select id="sede{{$key}}" name="sede[{{$key}}]" class='sede' data-id="@foreach ($sedes as $s)<option value='{{$s->id}}'>{{ $s->nombre }}</option>@endforeach">
                            <!--  <option value='ninguno'>Ninguno</option> -->
                            @foreach ($sedes as $s)
                              @if ($fecha->sedes_id==$s->id)
                              <option value='{{$s->id}}' selected>{{ $s->nombre }}</option>
                              @else
                              <option value='{{$s->id}}'>{{ $s->nombre }}</option>
                              @endif
                            @endforeach
                          </select>

                      </div>

                      <div class="col-lg-3 margin-tb">
                        <br>
                        @if($key==0)
                          <button type="button" id="botonFecha">Agrega otra fecha</button>
                        @else
                          <span class="glyphicon glyphicon-remove" aria-hidden="true"  id="botonEliminar"></span>
                        @endif
                      </div>

                  </div>
                </li>
                @endforeach

              </ol>
                  <hr>
                  <div>
                    <label for="color">Color</label>

                    <input type="color" name="color" value="{{$funcion->color}}">
                  </div>

                  <br>

        <br>
        <button type="submit"  class="btn btn-primary">Guardar</button>


      </form>

    </div><!-- /.container -->

    @endsection
    @include('layouts.footer')
