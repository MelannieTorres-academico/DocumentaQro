@extends('layouts.app')

@section('content')
 <div class="container">
	<div class="row">

    <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Sedes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('sedes.index') }}"> Atrás</a>
            </div>
	</div>
	<div class="row sede">

		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 sede">
            <div class="form-group sede">
                <img src="{{ asset($sedes -> poster) }}" class="sede" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="form-group">
                <strong>Nombre:</strong>
                <h3>{{ $sedes -> nombre}}</h3>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="form-group">
                <strong>Info:</strong>
                <h3>{{ $sedes -> info}}</h3>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="form-group">
                <strong>Direccion:</strong>
                <h3>{{ $sedes -> direccion}}</h3>
            </div>
        </div>

				
								</div>
				</div>
	</div>
	</div>
@endsection
