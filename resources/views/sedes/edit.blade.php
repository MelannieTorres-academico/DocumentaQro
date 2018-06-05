 @extends('layouts.app')

 @section('content')
<div class="section">



 <div class="container">

	<div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifica Sede</h2>
            </div>
            <div class="pull-right">
              <a class="btn btn-primary" id='link' data-id='sedes' onclick="atras()"> Atrás</a>
            </div>
        </div>
    </div>

	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> Hubo problemas con los datos que ingresaste.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	  <form method="POST" action='/sedes/{{$sede->id}}/edit' id='form' enctype="multipart/form-data" onsubmit='exito()'>
			    {{ csrf_field() }}
	<div class="row">
		<div class="col-xs-10 col-sm-10 col-md-10">
			<div>
					<label for="nombre">Nombre de la sede</label>

					<input type="varchar" class="form-control" id="nombre" name="nombre" placeholder="{{$sede->nombre}}" value="{{$sede->nombre}}" required>
			</div>
			<div>
					<label for="info">Informaci&oacute;n del lugar</label>

					<input type="varchar" class="form-control" id="info" name="info" placeholder="{{$sede->info}}" value="{{$sede->info}}" required>
			</div>
			<div>
					<label for="direccion">Direcci&oacute;n del lugar</label>

					<input type="varchar" class="form-control" id="direccion" name="direccion" placeholder="{{$sede->direccion}}" value="{{$sede->direccion}}" required>
			</div>
			<div>
					<label for="coordenadas">Coordenadas</label>

					<input type="varchar" class="form-control" id="coordenadas" name="coordenadas" placeholder="{{$sede->coordendas}}" value="{{$sede->coordenadas}}" required>
			</div>
			<div>
					<label for="link">Link</label>

					<input type="varchar" class="form-control" id="link" name="link" placeholder="{{$sede->link}}" value="{{$sede->link}}" required>
			</div>
      <hr>

						<div class="form-control-file">
						<label for="poster">Póster</label>

							<input type="file" class="form-control-file" id="poster" name="poster" aria-describedby="fileHelp"  accept="image/*" >

							<br>
							<div id="preview"><img src="{{asset($sede->poster)}}"></div>
						</div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Guardar</button>
        </div>

	</div></div>
</form>
@endsection
@extends('layouts.footer')
