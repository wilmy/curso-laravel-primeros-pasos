@extends('layouts.layout')

@section('title', 'Categoria  Create')

@section('content')
    

    <h2>Create Categoria</h2>

    @include('dashboard.fragment._errors-form')

    <form action="{{route('categorias.store')}}" method="post">
        @include('dashboard.categorias._categorias-form')
    </form>

@endsection