@extends('layouts.app')

@section('content')
 <div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Admin Sede</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('admin-sede')
	            <a class="btn btn-success" href="{{ route('sedes.create') }}"> Crea nueva sede</a>
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
			<th>ID</th>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th width="280px">Acci&oacute;n</th>
		</tr>
	@foreach ($sedes as $sede)
	<tr>
    <!-- Esta $i de donde sale y el key de arriba -->
    <td>{{ ++$i }}</td>

		<td>{{ $sede->nombre }}</td>
		<td>{{ $sede->direccion }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('sedes.show',$sede->id) }}">Ver</a>
			@permission('admin-sede')
			<a class="btn btn-primary" href="{{ route('sedes.edit',$sede->id) }}">Editar</a>
			@endpermission
			@permission('admin-sede')


				{!! Form::open(['onclick' =>'confirm(event, this)', 'method' => 'DELETE','route' => ['sedes.destroy', $sede->id],'style'=>'display:inline']) !!}
				{!! Form::submit('Eliminar', ['class' => 'btn btn-danger'])  !!}
				{!! Form::close() !!}

        	@endpermission
		</td>
	</tr>
	@endforeach
<!-- 'onclick' =>'confirm(event, this)',  -->

	</table>
	{!! $sedes->render() !!}
</div>
@endsection
