@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="page-header text-center">Lista de Productos </h1>
    <hr>
    <div class="row">
        <div class="col-md-11 offset-md-2">
            <a href="{{ route('productos.create') }}" class="btn btn-primary">Registrar Nuevo</a>
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}
                </div>
            @endif
            <div class="table">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th colspan="2">Acciones</th>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Precio de Compra</th>
                            <th>Precio de Venta</th>
                            <th>Fecha de Vencimiento</th>
                            <th>Fecha de Produccion</th>
                            <th>Proveedor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $data)
                            <tr>
                                <td width="10px">
                                    <a href="{{route('productos.edit', $data->id)}}" class="btn btn-success btn-sm">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{route('productos.destroy', $data->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type
                                        ="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                                <td>{{$data->nombre}}</td>
                                <td>{{$data->cantidad}}</td>
                                <td>{{$data->compra}}</td>
                                <td>{{$data->venta}}</td>
                                <td>{{$data->venc}}</td>
                                <td>{{$data->prod}}</td>
                                <td>{{$data->proveedor->nombre}} {{$data->proveedor->apellido}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

@endsection