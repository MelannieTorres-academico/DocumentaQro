@extends('layouts.app')
 
@section('content')
 <div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Editar Administrador</h2>
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

			<th>Nombre</th>
			<th>Email</th>
			<th>Roles</th>
			<th width="280px">Acción</th>
		</tr>
	@foreach ($data as $key => $user)
	@if ($user->id==1)
	<tr>

		<td>{{ $user->name }}</td>
		<td>{{ $user->email }}</td>
		<td>
			@if(!empty($user->roles))
				@foreach($user->roles as $v)
					<label class="label label-success">{{ $v->display_name }}</label>
				@endforeach
			@endif
		</td>
		<td>
			<a class="btn btn-info" href="{{ route('root.show',$user->id) }}">Ver</a>
			<a class="btn btn-primary" href="{{ route('root.edit',$user->id) }}">Editar</a>
        	{!! Form::close() !!}
		</td>
	</tr>
	@endif
	@endforeach
	</table>
	{!! $data->render() !!}
</div>
@endsection