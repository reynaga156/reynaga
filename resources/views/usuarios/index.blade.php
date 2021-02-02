@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="page-header text-center">Lista de Usuarios</h1>
    <hr>
    <div class="row">
        <div class="col-md-10 offset-md-3">
            <div class="table">
                <table class="table table-hover">
                    <thead class="btn-dark">
                        <tr>
                            <th scope="col">Nombres</th>           
                            <th scope="col">E-mail</th>           
                        </tr>
                    </thead>
                        @foreach($usuarios as $data)
                            <tr>
                                <th scope="row">{{$data->name}}</th>
                                <td>{{$data->email}}</td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection