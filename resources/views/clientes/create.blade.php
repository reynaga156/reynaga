@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-2">
			<h1 class="page-header text-center">Registrar Cliente</h1>
			@if (Session::has('message'))
			    <div class="alert alert-info">{{ Session::get('message') }}
			    </div>
            @endif
			<form class="form-group" method="POST" action="{{route('clientes.store')}}">
			@csrf
		        <label for="nombre">Nombres</label>
				<input type="text" class="form-control" name="nombre" autocomplete="off" required>
				<label for="apellido">Apellidos</label>
				<input type="text" class="form-control" name="apellido" autocomplete="off" required>						
				<label for="fecha">Fecha de Nacimiento</label>
				<input type="date" class="form-control" name="fecha" autocomplete="off" required>				
				<label for="direccion">Direccion</label>
				<input type="text" class="form-control" name="direccion" autocomplete="off" required>
				<label for="telefono">Telefono</label>
				<input type="text" class="form-control" name="telefono" autocomplete="off" required>
				<label for="sexo">Sexo</label>
				<input type="text" class="form-control" name="sexo" autocomplete="off" required>
				<br>
				<a href="{{ route('clientes.index') }}" class="btn btn-danger">Cancelar</a>
		        <button type="submit" class="btn btn-primary">Registrar</button>
		    </form>  
		</div>
    </div>
</div>

@endsection