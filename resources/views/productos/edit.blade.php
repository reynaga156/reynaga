@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Actualizar datos del Producto</h1>
			@if (Session::has('message'))
			    <div class="alert alert-info">{{ Session::get('message') }}
			    </div>
            @endif
			<hr>
			<form class="form-group" method="POST" action="{{route('productos.update', $producto->id)}}">
				@method('PUT')
				@csrf
				<label for="nombre">Nombre</label>
				<input type="text" class="form-control" name="nombre" autocomplete="off" value="{{$producto->nombre}}">
				<label for="cantidad">Cantidad</label>
				<input type="text" class="form-control" name="cantidad" autocomplete="off" value="{{$producto->cantidad}}">
				<label for="compra">Precio de Compra</label>
				<input type="text" class="form-control" name="compra" autocomplete="off" value="{{$producto->compra}}">
				<label for="venta">Precio de Venta</label>
				<input type="text" class="form-control" name="venta" autocomplete="off" value="{{$producto->venta}}">
				<label for="venc">Fecha de Vencimiento</label>
				<input type="text" class="form-control" name="venc" autocomplete="off" value="{{$producto->venc}}">
				<label for="prod">Fecha de Produccion</label>
				<input type="text" class="form-control" name="prod" autocomplete="off" value="{{$producto->prod}}">
				<label for="tipo_id">Tipo de producto : </label>
				<input type="text" class="form-control" name="tipo_id" autocomplete="off" value="{{$producto->tipo->nombre}}">
				<label for="proveedor_id">Proveedor : </label>
				<input type="text" class="form-control" name="proveedor_id" autocomplete="off" value="{{$producto->proveedor->nombre}} {{$producto->proveedor->apellido}}">
				<div class="row">
					<div class="col-md-12 text-center">
				    <a href="{{route('productos.index')}}" class="btn btn-danger">Cancelar</a>
				    <button type="submit" class="btn btn-primary">Editar</button>
				    </div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection