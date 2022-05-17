@extends('layouts.webLayout')

@section('title', 'Listado de post')

@section('content')

    <h1>Lista de Post</h1>

    <x-web.blog.post.show :post="$post" />

@endsection