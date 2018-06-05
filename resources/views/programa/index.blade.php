@extends('layouts.app')

@section('content')
 <div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Programas</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('admin-programas')
	            <a class="btn btn-success" href="{{ route('programa.create') }}" id='create'> Crear Nuevo Programa </a>
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
			<th width="280px">Acción</th>
		</tr>

	@foreach ($programas as $key => $programa)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $programa->titulo }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('programa.show',$programa->id) }}" >Ver</a>
			@permission('admin-programas')

				<a class="btn btn-primary" href="{{ route('programa.edit',$programa->id) }}" >Editar</a>

				{!! Form::open(['onclick' =>'confirm(event, this)', 'method' => 'DELETE','route' => ['programa.destroy', $programa->id],'style'=>'display:inline']) !!}
				{!! Form::submit('Eliminar', ['class' => 'btn btn-danger'])  !!}
				{!! Form::close() !!}
    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
  {!! $programas->render() !!}

</div>
@endsection
