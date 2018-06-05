@extends('layouts.app')

@section('content')

    <div class="container">

      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Crear Nueva Sede</h2>
            </div>
            <div class="pull-right">
              <a class="btn btn-primary" id='link' data-id='sedes' onclick="atras()"> Atrás</a>
            </div>
        </div>
    </div>
  @include("layouts.errors")
      <form method="POST" action="/sedes/create" enctype="multipart/form-data" onsubmit='exito()'>

        {{ csrf_field() }}

        <div class="">

            <label for="nombre">Nombre de la sede</label>

            <input type="varchar" class="form-control" id="nombre" name="nombre" placeholder="El lugar donde sera el evento" required>

        </div>

        <hr>

         <div class="">

            <label for="info">Informaci&oacute;n del lugar</label>

            <input type="text" class="form-control" id="info" name="info" placeholder="informacion" required>

        </div>

        <hr>

           <div class="">

              <label for="direccion">Direcci&oacute;n del lugar</label>

              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion del Lugar" required>

          </div>
          <hr>

          <div class="">
            <label for="latitud">Latitud</label>
            <input type="text" class="form-control" id="latitud" name="latitud" placeholder="Ej: 20.6031332" >
          </div>
          <div class="">
            <label for="longitud">Longitud</label>
            <input type="text" class="form-control" id="longitud" name="longitud" placeholder="Ej: -100.3949745" >
          </div>

    <hr>

    <div class="">
        <label for="link" class="col-2 col-form-label">Link</label>

        <div class="form-group row">

                <div class="col-10">

                    <input class="form-control" placeholder="https://www.webpage.com/" id="Link" name="link" required>

              </div>

        </div>

        </div>
    <hr>

    <div class="form-control-file">

        <input type="file" class="form-control-file" id="poster" name="poster" aria-describedby="fileHelp" required accept="image/*" >

        <small id="fileHelp" class="form-text text-muted">Poster</small>
          <div id="preview"></div>


    </div>

    <hr>
        <button type="submit" class="btn btn-primary">Crear</button>



      </form>

    </div><!-- /.container -->

@include('layouts.footer')
@endsection
