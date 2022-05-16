@extends('dashboard.layaout')

@section('title', 'Detalles de: '.$categoria->title)

@section('content')
    

    <h2>Categoria: {{ $categoria->title }}</h2>

    <p>{{ $categoria->slug }}</p>
   

@endsection