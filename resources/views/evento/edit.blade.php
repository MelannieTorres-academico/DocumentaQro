@include('layouts.app')


    <div class="container">

      <div class="starter-template">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Editar Evento</h2>
            </div>
            <div class="pull-right">
              <a class="btn btn-primary" id='link' data-id='evento' onclick="atras()"> Atrás</a>
            </div>
        </div>
    </div>

      </div>

      <form method="POST" action='/evento/{{$evento->id}}/edit' id='form' enctype="multipart/form-data" onsubmit='exito()'>
        {{ csrf_field() }}
        @include("layouts.errors")


        <div>

            <label for="title">Título</label>

            <input type="varchar" class="form-control" id="title" name="title" placeholder="{{$evento->title}}" value="{{$evento->title}}" required>

        </div>
        <hr>
         <div>

            <label for="descripcion">Descripcion</label>

            <input type="varchar" class="form-control" id="descripcion" name="descripcion" placeholder="DoQu" value="{{$evento->descripcion}}" required>

        </div>
        <hr>



          <div class="form-control-file">
          <label for="poster">Póster</label>


            <input type="text" class="form-control" id="poster" name="poster" placeholder="https://www.Box.com/ejemplo" value="{{$evento->poster}}" required>

        </div>
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

          <input type="color" name="color" value="{{$evento->color}}">
        </div>

        <br>

        <button type="submit"  class="btn btn-primary">Guardar</button>


  </form>

    </div>


@include('layouts.footer')
