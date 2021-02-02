@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-2">
			<h1 class="page-header text-center">Registro de Productos</h1>
			@if (Session::has('message'))
			    <div class="alert alert-info">{{ Session::get('message') }}
			    </div>
            @endif
			<form class="form-group" method="POST" action="{{route('productos.store')}}">
			@csrf
		        <label for="nombre">Nombre</label>
				<input type="text" class="form-control" name="nombre" autocomplete="off" required>
				<label for="cantidad">Cantidad</label>
				<input type="text" class="form-control" name="cantidad" autocomplete="off" required>
				<label for="compra">Precio de Compra</label>
				<input type="text" class="form-control" name="compra" autocomplete="off" required>
				<label for="venta">Precio de Venta</label>
				<input type="text" class="form-control" name="venta" autocomplete="off" required>				
				<label for="venc">Fecha de Vencimiento</label>
				<input type="date" class="form-control" name="venc" autocomplete="off" required>				
				<label for="prod">Fecha de Produccion</label>
				<input type="date" class="form-control" name="prod" autocomplete="off" required>
				<label for="tipo_id">Tipo</label>
				<select name="tipo_id" class="form-control" required>
					@foreach($tipo as $data)<option value="{{$data->id}}">{{$data->nombre}}</option>
				    @endforeach
				</select>
				<label for="prove_id">Proveedor</label>
				<select name="prove_id" class="form-control" required>
					@foreach($proveedor as $data)<option value="{{$data->id}}">{{$data->nombre}} {{$data->apellido}}</option>
				    @endforeach
				</select>
				<br>
				<a href="{{ route('productos.index') }}" class="btn btn-danger">Cancelar</a>
		        <button type="submit" class="btn btn-primary">Registrar</button>
		    </form>  
		</div>
    </div>
</div>

@endsection