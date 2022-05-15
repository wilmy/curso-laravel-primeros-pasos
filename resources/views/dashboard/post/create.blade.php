@extends('dashboard.layaout')

@section('title', 'Post Create')

@section('content')
    

    <h2>Create Post</h2>

    @include('dashboard.fragment._errors-form')

    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
        @include('dashboard.fragment._post-form')
    </form>

@endsection