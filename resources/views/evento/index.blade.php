@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Eventos</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('admin-events')
	            <a class="btn btn-success" href="{{ route('evento.create') }}" id='create'> Crear Nuevo Evento</a>
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

	@foreach ($eventos as $key => $event)
			@if($last_id!=$event->id)
    	<tr>
				<td>{{ ++$i }}</td>
        <td>{{ $event->title }}</td>
				<td>
					@foreach ($eventos as $key => $start)
						@if($start->id==$event->id)
							{{ $starts[$key] }}<br>
						@endif
					@endforeach
        </td>
				<td>
					@foreach ($eventos as $key => $end)
						@if($end->id==$event->id)
							{{ $end->nombre}}<br>
						@endif
					@endforeach
        </td>
    		<td>
    			<a class="btn btn-info" href="{{ route('evento.show',$event->id) }}" >Ver</a>
    			<a class="btn btn-primary" href="{{ route('evento.edit',$event->id) }}" >Editar</a>
						{!! Form::open(['onclick' =>'confirm(event, this)', 'method' => 'DELETE','route' => ['evento.destroy', $event->id],'style'=>'display:inline']) !!}
						{!! Form::submit('Eliminar', ['class' => 'btn btn-danger'])  !!}
						{!! Form::close() !!}

    		</td>
    	</tr>
			@endif
			@php ($last_id=$event->id)
	@endforeach
	</table>
	{!! $eventos->render() !!}



</div>
@endsection
