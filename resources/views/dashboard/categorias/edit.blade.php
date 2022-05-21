@extends('layouts.layout')

@section('title', 'Categoria: '. $category->title)

@section('content')
  

    <h2>Actualizar Categoria: {{ $category->title }}</h2>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('categorias.update', $category->id) }}" method="post">
        @method('PUT')

        @include('dashboard.categorias._categorias-form')
    </form>

@endsection