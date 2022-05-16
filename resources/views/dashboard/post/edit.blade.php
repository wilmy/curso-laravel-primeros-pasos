@extends('dashboard.layaout')

@section('title', 'Post: '. $post->title)

@section('content')
    

    <h2>Actualizar Post: {{ $post->title }}</h2>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')

        @include('dashboard.post._post-form')
    </form>

@endsection