@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Actualizar Tipos Producto</h1>
			@if (Session::has('message'))
			    <div class="alert alert-info">{{ Session::get('message') }}
			    </div>
            @endif
			<hr>
			<form class="form-group" method="POST" action="{{route('tipos.update', $tipo->id)}}">
				@method('PUT')
				@csrf
				<label for="nombre">Nombres</label>
				<input type="text" class="form-control" name="nombre" autocomplete="off" value="{{$tipo->nombre}}">
				<label for="descripcion">Descripcion</label>
				<input type="text" class="form-control" name="descripcion" autocomplete="off" value="{{$tipo->descripcion}}">
				<div class="row">
					<div class="col-md-12 text-center">
				    <a href="{{route('tipos.index')}}" class="btn btn-danger">Cancelar</a>
				    <button type="submit" class="btn btn-primary">Editar</button>
				    </div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection