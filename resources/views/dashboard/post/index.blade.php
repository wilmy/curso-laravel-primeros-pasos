@extends('layouts.layout')

@section('title', 'Listado de post')

@section('content')

    <h1>Lista de Post</h1>

    <a class="btn btn-primary" href="{{ route('post.create') }}">Crear Nuevo</a>
    <div class="card">
        <table class="table mb-3">
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
                            <a class="btn btn-primary" href="{{ route('post.edit', $item) }}">Editar</a>
                            <a class="btn btn-primary" href="{{ route('post.show', $item) }}">Ver</a>
                            <form action="{{ route('post.destroy', $item) }}" method="post">
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
        {{ $posts->links()}}
    </div>
@endsection