@extends('dashboard.layaout')

@section('title', 'Listado de categorias')

@section('content')

    <h1>Lista de Categorias</h1>

    <a href="{{ route('categorias.create') }}">Crear Nueva</a>
    <table>
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
                        <a href="{{ route('categorias.edit', $item) }}">Editar</a>
                        <a href="{{ route('categorias.show', $item) }}">Ver</a>
                        <form action="{{ route('categorias.destroy', $item) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categorias->links()}}
@endsection