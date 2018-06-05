@extends('layouts.app')
@section('content')

    <div class="container">

      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Crear Nuevo Programa</h2>
            </div>
            <div class="pull-right">
              <a class="btn btn-primary" id='link' data-id='programas' onclick="atras()"> Atrás</a>
            </div>
        </div>
    </div>

      <form method="POST" action='/programas/create' id='form' enctype="multipart/form-data" onsubmit='exito()'>

        {{ csrf_field() }}



        <div>

            <label for="titulo">Título</label>

            <input type="varchar" class="form-control" id="titulo" name="titulo" placeholder="DoQu" required>

        </div>
        <hr>
        <div>

            <label for="descripcion">Descripción</label>

            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Este programa fue abierto en 2013, contiene ..." required>

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

        <button type="submit"  class="btn btn-primary">Crear</button>


      </form>

    </div><!-- /.container -->

@endsection
