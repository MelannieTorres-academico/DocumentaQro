@extends('layouts.app')

@section('content')
    <div class="container">


      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1>Crear patrocinador</h1>
            <p class="lead">Llena los campos</p>

        </div>

        <div class="pull-right">
          <br>
          <a class="btn btn-primary" id='link' data-id='patrocinadores' onclick="atras()"> Atrás</a>
        </div>
    </div>



        @include("layouts.errors")

        <form method="POST" action='/patrocinadores/create' id='form' enctype="multipart/form-data" onsubmit='exito()'>
          {{ csrf_field() }}
        <div>

            <label for="nombre">Nombre</label>

            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Conferencia" required>

        </div>
        <hr>
        <div>
            <label for="link">Link</label>

            <input type="text" class="form-control" id="link" name="link" placeholder="link">
        </div>


        <hr>

        <div class="form-control-file">
          <label for="poster">Póster</label>

            <input type="file" class="form-control-file" id="poster" name="poster" aria-describedby="fileHelp" required accept="image/*" >

            <small id="fileHelp" class="form-text text-muted">Poster</small>
            <br>
            <div id="preview"></div>

        </div>

        <hr>

        <div>

          <label for="categoria">categoria</label>

          <select id="categoria" name="categoria">
            <option value='1'>Presentado por:</option>
            <option value='2'>Con el apoyo de:</option>
            <option value='3'>En colaboracion con:</option>
          </select>
        </div>
        <hr>

        <br>
        <button type="submit"  class="btn btn-primary">Crear</button>


      </form>

    </div><!-- /.container -->

@endsection
@include('layouts.footer')
