@extends('layouts.app')
@section('content')

    <div class="container">

     <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modificar Programa</h2>
            </div>
            <div class="pull-right">
              <a class="btn btn-primary" id='link' data-id='programas' onclick="atras()"> Atrás</a>
            </div>
        </div>
    </div>

      <form method="POST" action='/programas/{{$programa->id}}/edit' id='form' enctype="multipart/form-data" onsubmit='exito()'>

        {{ csrf_field() }}
        @include("layouts.errors")


        <div>

            <label for="titulo">Título</label>

            <input type="varchar" class="form-control" id="titulo" name="titulo" placeholder="DoQu" value="{{$programa->titulo}}" required>

        </div>
        <hr>
        <div>

            <label for="descripcion">Descripción</label>

            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$programa->descripcion}}" placeholder="Este programa fue abierto en 2013, contiene ..." required>

        </div>


        <hr>

        <div class="form-control-file">
          <label for="poster">Póster</label>

            <input type="file" class="form-control-file" id="poster" name="poster" aria-describedby="fileHelp"  accept="image/*" >

            <br>
            <div id="preview"><img src="{{asset($programa->poster)}}" ></div>


        </div>

        <hr>

        <button type="submit"  class="btn btn-primary">Guardar</button>


      </form>

    </div><!-- /.container -->
    @endsection
