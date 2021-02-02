@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="page-header text-center">Lista de Clientes</h1>
    <hr>
    <div class="row">
        <div class="col-md-9 offset-md-4">
            <a href="{{ route('clientes.create') }}" class="btn btn-primary">Registrar Nuevo</a>
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}
                </div>
            @endif
            
    <div class="table">
         <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th colspan="2">Acciones</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $data)
                            <tr>
                                <td width="10px">
                                    <a href="{{route('clientes.edit', $data->id)}}" class="btn btn-success btn-sm">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{route('clientes.destroy', $data->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type
                                        ="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                                <td>{{$data->nombre}}</td>
                                <td>{{$data->apellido}}</td>
                                <td>{{$data->direccion}}</td>
                                <td>{{$data->telefono}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

@endsection