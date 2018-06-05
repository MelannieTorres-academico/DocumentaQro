@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Fichas Técnicas</h2>
	        </div>
	        <div class="pull-right">

	            <a class="btn btn-success" href="{{ route('datasheet.create') }}" id='create'> Crear nueva Ficha Técnica</a>


	        </div>
	    </div>
	</div>

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Título</th>
	
			<th>País</th>
		
			<th>Última modificación</th>

			<th>Acción</th>

		</tr>
	@foreach ($datasheet as $key => $datashee)
	<tr>
		<td>{{ ++$i }}</td>
		<td> {{ $datashee->titulo }} </td>
		
		<td> {{ $datashee->pais }} </td>
		<td> {{ $datashee->updated_at }} </td>


		<td>

			<a class="btn btn-info" href="{{ route('datasheet.ver',$datashee->id) }}" >Ver</a>
			<a class="btn btn-primary" href="{{ route('datasheet.edit',$datashee->id) }}">Editar</a>
			{!! Form::open(['onclick' =>'confirm(event, this)', 'method' => 'DELETE','route' => ['datasheet.destroy', $datashee->id],'style'=>'display:inline']) !!}
			{!! Form::submit('Eliminar', ['class' => 'btn btn-danger'])  !!}
			{!! Form::close() !!}

		</td>
	</tr>
	@endforeach
	</table>
{!! $datasheet->render() !!}
</div>
@endsection
