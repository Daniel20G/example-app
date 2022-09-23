@extends('layouts.app')

@section('title', 'Listado de Categorias')
@section('content')

<h1>Listado de Categorias</h1>

<hr/>

<div class="container text-center card">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->nombre }}</td>
                <td>{{ $row->descripcion }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
