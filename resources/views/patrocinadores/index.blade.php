@extends('layouts.app')

@section('content')
 <div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Admin patrocinadores</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('admin-sponsors')
	            <a class="btn btn-success" href="{{ route('patrocinadores.create') }}"> Agregar patrocinador</a>
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
			<th>Categor&iacute;a</th>
			<th width="280px">Acci&oacute;n</th>
		</tr>
	@foreach ($patrocinadores as $patrocinador)
	<tr>
    <!-- Esta $i de donde sale y el key de arriba -->
    <td>{{ ++$i }}</td>

		<td>{{ $patrocinador->nombre }}</td>
		<td>{{ $patrocinador->categoria }}</td>
		<td>

			<a class="btn btn-primary" href="{{ route('patrocinadores.edit',$patrocinador->id) }}">Editar</a>

      {!! Form::open(['onclick' =>'confirm(event, this)', 'method' => 'DELETE','route' => ['patrocinadores.destroy', $patrocinador->id],'style'=>'display:inline']) !!}
      {!! Form::submit('Eliminar', ['class' => 'btn btn-danger'])  !!}
      {!! Form::close() !!}
		</td>
	</tr>
	@endforeach
<!-- 'onclick' =>'confirm(event, this)',  -->

	</table>
	{!! $patrocinadores->render() !!}
</div>
@endsection
