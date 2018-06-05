@extends('layouts.app')

@section('content')
 <div class="container">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Admin Slider</h2>
	        </div>
	        <div class="pull-right">

	            <a class="btn btn-success" href="{{ route('slider.create') }}"> Crear nuevo Item</a>

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
			<th>id</th>
			<th>titulo</th>
			<th>subtitulo</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($slider as $key => $slide)
	<tr>
    <!-- Esta $i de donde sale y el key de arriba -->
    <td>{{ ++$i }}</td>

		<td>{{ $slide->titulo }}</td>
		<td>{{ $slide->subtitulo }}</td>
		<td>

			<a class="btn btn-primary" href="{{ route('slider.edit', $slide->id) }}">Editar</a>


      {!! Form::open(['onclick' =>'confirm(event, this)', 'method' => 'DELETE','route' => ['slider.destroy', $slide->id],'style'=>'display:inline']) !!}
			{!! Form::submit('Eliminar', ['class' => 'btn btn-danger'])  !!}
			{!! Form::close() !!}

		</td>
	</tr>
	@endforeach


	</table>
	{!! $slider->render() !!}
	</div>
@endsection
