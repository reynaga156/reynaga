@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-2">
			<h1 class="page-header text-center">Registro Tipos Producto</h1>
			@if (Session::has('message'))
			    <div class="alert alert-info">{{ Session::get('message') }}
			    </div>
            @endif
			<form class="form-group" method="POST" action="{{route('tipos.store')}}">
			@csrf
		        <label for="nombre">Nombre</label>
				<input type="text" class="form-control" name="nombre" autocomplete="off" required>
				<label for="descripcion">Descripcion</label>
				<input type="text" class="form-control" name="descripcion" autocomplete="off" required>
				<br>
				<a href="{{ route('tipos.index') }}" class="btn btn-danger">Cancelar</a>
		        <button type="submit" class="btn btn-primary">Registrar</button>
		    </form>  
		</div>
    </div>
</div>

@endsection