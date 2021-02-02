@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Registro de Proveedor</h1>
			@if (Session::has('message'))
			    <div class="alert alert-info">{{ Session::get('message') }}
			    </div>
            @endif
			<form class="form-group" method="POST" action="{{route('proveedors.store')}}">
			@csrf
		        <label for="nombre">Nombres</label>
				<input type="text" class="form-control" name="nombre" autocomplete="off" required>
				<label for="apellido">Apellidos</label>
				<input type="text" class="form-control" name="apellido" autocomplete="off">
				<label for="telefono">Telefono</label>
				<input type="text" class="form-control" name="telefono" autocomplete="off" required>
				<label for="direccion">Direccion</label>
				<input type="text" class="form-control" name="direccion" autocomplete="off" required>
				<br>
				<a href="{{ route('proveedors.index') }}" class="btn btn-danger">Cancelar</a>
		        <button type="submit" class="btn btn-primary">Registrar</button>
		    </form>  
		</div>
    </div>
</div>

@endsection