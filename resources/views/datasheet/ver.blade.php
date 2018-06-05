@extends('layouts.app')

@section('content')
 <div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2> Muestra Ficha Técnica</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('datasheet.index') }}"> Atrás</a>
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Título:</strong>
                {{ $datasheet->titulo }}
            </div>
        </div>

		<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
						<strong>Director:</strong>
							{{ $datasheet->director }}
						</div>
				</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>País:</strong>
                {{ $datasheet->pais }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Año:</strong>
                {{ $datasheet->anio }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Duración:</strong>
                {{ $datasheet->duracion }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Subtítulos:</strong>
                {{ $datasheet->subtitulos }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Trailer:</strong>
                {{ $datasheet->trailer }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Costo:</strong>
                {{ $datasheet->costo }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Moneda:</strong>
                {{ $datasheet->moneda }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sinopsis:</strong>
                {{ $datasheet->sinopsis }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $datasheet->status }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Programa:</strong>
                {{ $datasheet->programa }}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Poster:</strong>
                <!--<img src='{{ asset($datasheet->poster) }}'>-->
                  <iframe src="{{ $datasheet->poster }}" width="275" height="365" frameborder="0" allowfullscreen webkitallowfullscreen msallowfullscreen></iframe> 
            </div>
            <hr>
        </div>
        <hr>
	</div>
</div>




@endsection
