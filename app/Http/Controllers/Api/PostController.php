<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::paginate(5);
        return response()->json($posts); 
    }

    public function all()
    {
        $posts = Post::get();
        return response()->json($posts); 
    }

    public function slug($slug)
    {
        $posts = Post::with("category")->where("slug", $slug)->firstOrFail();
        return response()->json($posts); 
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        return response()->json(Post::create($data));
    }

    public function show(Post $post)
    {
        return response()->json($post);
    }

    public function update(PutRequest $request, Post $post)
    {
        $data = $request->validated();
        $post->update($data);
        return response()->json($post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json('Registro eliminado correctamente.');
    }
}
