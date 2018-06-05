@extends('layouts.app')

@section('content')
    <div class="container">

      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1>Editar patrocinador</h1>
            <p class="lead">Llena los campos</p>
        </div>
        <div class="pull-right">
          <br>
          <a class="btn btn-primary" id='link' data-id='patrocinadores' onclick="atras()"> Atrás</a>
        </div>
    </div>
        @include("layouts.errors")

        <form method="POST" action='/patrocinadores/{{$patrocinadores->id}}/edit' id='form' enctype="multipart/form-data" onsubmit='exito()'>
          {{ csrf_field() }}
          <div>
            <label for="nombre">Nombre del patrocinador</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$patrocinadores->nombre}}" required>
          </div>
          <hr>
          <div>
            <label for="link">Link a la p&acute;gina del patrocinador</label>
            <input type="text" class="form-control" id="link" name="link" value="{{$patrocinadores->link}}"required>
        </div>
        <hr>
        <div class="form-control-file">
          <label for="poster">Logo del patrocinador</label>
          <input type="file" class="form-control-file" id="poster" name="poster" aria-describedby="fileHelp"  accept="image/*" >
          <br>
          <div id="preview"><img src="{{asset($patrocinadores->poster)}}" ></div>
        </div>
        <hr>
        <div>
          <label for="categoria">Categor&iacute;a</label>
          <select id="categoria" name="categoria">
            <option value='{{$patrocinadores->categoria}}'>Categoria {{$patrocinadores->categoria}} </option>
            <option value='1'>Presentado por:</option>
            <option value='2'>Con el apoyo de:</option>
            <option value='3'>En colaboracion con:</option>
          </select>
        </div>
        <hr>

        <br>
        <button type="submit"  class="btn btn-primary">Guardar</button>


      </form>

    </div><!-- /.container -->

@endsection
@include('layouts.footer')
