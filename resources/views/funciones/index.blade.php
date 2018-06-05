@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Funciones</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('admin-events')
	            <a class="btn btn-success" href="{{ route('funciones.create') }}" id='create'> Crear Nueva Función</a>
	            @endpermission
	        </div>
	    </div>
	</div>

	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif

	<table class="table table-bordered">
		<tr>
			<th>No</th>
      <th>Título</th>
      <th>Inicio</th>
			<th>Lugar</th>
			<th width="280px">Acción</th>
		</tr>

	@foreach ($funciones as $key => $funcion)
		@if($last_id!=$funcion->id)
    	<tr>
				<td>{{ ++$i }}</td>
				<td>
					@foreach ($datasheets as $key => $dt)
						@if($dt->funcion_id==$funcion->id)
				{{$dt->titulo }}<br>
						@endif
					@endforeach
			</td>
				<td>
					@foreach ($funciones as $key => $start)
						@if($start->id==$funcion->id)
							{{ $starts[$key] }}<br>
						@endif
					@endforeach
        </td>
				<td>
					@foreach ($funciones as $key => $end)
						@if($end->id==$funcion->id)
							{{ $end->nombre}}<br>
						@endif
					@endforeach
        </td>
    		<td>
    			<a class="btn btn-info" href="{{ route('funciones.show',$funcion->id) }}" >Ver</a>
    			<a class="btn btn-primary" href="{{ route('funciones.edit',$funcion->id) }}" >Editar</a>
						{!! Form::open(['onclick' =>'confirm(funcion, this)', 'method' => 'DELETE','route' => ['funciones.destroy', $funcion->id],'style'=>'display:inline']) !!}
						{!! Form::submit('Eliminar', ['class' => 'btn btn-danger'])  !!}
						{!! Form::close() !!}

    		</td>
    	</tr>
			@endif
			@php ($last_id=$funcion->id)
	@endforeach
	</table>
	{!! $funciones->render() !!}
</div>
@endsection
