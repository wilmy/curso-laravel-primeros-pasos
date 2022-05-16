@extends('dashboard.layaout')

@section('title', 'Categoria: '. $categoria->title)

@section('content')
  

    <h2>Actualizar Categoria: {{ $categoria->title }}</h2>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('categorias.update', $categoria->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')

        @include('dashboard.categorias._categorias-form')
    </form>

@endsection