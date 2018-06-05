@extends('layouts.app')

@section('content')
 <div class="container">

	<div class="row">
	    <div class="col-lg-11 margin-tb">
	        <div class="pull-left">
	            <h2>Editar {{ $slider -> titulo}}</h2>
	        </div>
	        <div class="pull-right">

            <a class="btn btn-primary" id='link' data-id='slider' onclick="atras()"> Atrás</a>

	        </div>
	    </div>
	</div>
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Ups!!</strong> Hay problemas con los datos que modificaste.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

    <form method="POST" action='/slider/{{$slider->id}}/edit' id='form' enctype="multipart/form-data" onsubmit='exito()'>

      {{ csrf_field() }}

		<div class="col-xs-10 col-sm-10 col-md-10 ">
      <div>
          <label for="titulo">Título</label>

          <input type="varchar" class="form-control" id="titulo" name="titulo" placeholder="{{$slider->titulo}}" value="{{$slider->titulo}}" required>
      </div>


      <hr>
       <div>

          <label for="subtitulo">Subtitulo</label>

          <input type="varchar" class="form-control" id="subtitulo" name="subtitulo" placeholder="DoQu" value="{{$slider->subtitulo}}" required>

      </div>
      <hr>
      <div>

         <label for="link">Link</label>

         <input type="link" class="form-control" id="link" name="link" placeholder="DoQu" value="{{$slider->link}}" required>

     </div>


						<hr>

            <div class="form-control-file">
            <label for="poster">Póster</label>

              <input type="file" class="form-control-file" id="poster" name="poster" aria-describedby="fileHelp"  accept="image/*" >

              <br>
              <div id="preview"><img src="{{asset($slider->poster)}}"></div>

            </div>
            <hr>

            <div class="col-xs-10 col-sm-10 col-md-10 text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
            </div>


	</div>
</form></div></div>
@endsection


@include('layouts.footer')
