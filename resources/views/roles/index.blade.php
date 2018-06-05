@extends('layouts.app')

@section('content')
 <div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Administrar Roles</h2>
	        </div>
	        <div class="pull-right">

	            <a class="btn btn-success" href="{{ route('roles.create') }}"> Crear Nuevo Rol</a>

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
			<th>Nombre</th>
			<th>Descripcion</th>
			<th width="280px">Acción</th>
		</tr>
	@foreach ($roles as $key => $role)
	@if ($role->id!=1)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $role->display_name }}</td>
		<td>{{ $role->description }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Ver</a>

			<a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Editar</a>

        {!! Form::open(['onclick' =>'confirm(event, this)', 'method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger'])  !!}
        {!! Form::close() !!}

		</td>
	</tr>
	@endif
	@endforeach
	</table>
	{!! $roles->render() !!}
	</div>
@endsection
