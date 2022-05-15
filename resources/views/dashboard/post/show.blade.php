@extends('dashboard.layaout')

@section('title', 'Detalles de: '.$post->title)

@section('content')
    

    <h2>Post: {{ $post->title }}</h2>

    <p>{{ $post->description }}</p>
   
    <div>
        {{ $post->content }}
    </div>

@endsection