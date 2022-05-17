@extends('layouts.layout')

@section('title', 'Listado de categorias')

@section('content')

    <h1>Lista de Categorias</h1>

    <a class="btn btn-primary" href="{{ route('categorias.create') }}">Crear Nueva</a>
    <div class="card">
        <table class="table mb-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Slug</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->slug }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('categorias.edit', $item) }}">Editar</a>
                            <a class="btn btn-primary" href="{{ route('categorias.show', $item) }}">Ver</a>
                            <form action="{{ route('categorias.destroy', $item) }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $categorias->links()}} 
    </div>
@endsection