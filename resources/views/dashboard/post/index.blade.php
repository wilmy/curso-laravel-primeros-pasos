@extends('dashboard.layaout')

@section('title', 'Listado de post')

@section('content')

    <h1>Lista de Post</h1>

    <a href="{{ route('post.create') }}">Crear Nuevo</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Slug</th>
                <th>Categoria</th>
                <th>Posteado</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>{{ $item->category->title }}</td>
                    <td>{{ $item->posted }}</td>
                    <td>{{ $item->image }}</td>
                    <td>
                        <a href="{{ route('post.edit', $item) }}">Editar</a>
                        <a href="{{ route('post.show', $item) }}">Ver</a>
                        <form action="{{ route('post.destroy', $item) }}" method="post">
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
    {{ $posts->links()}}
@endsection