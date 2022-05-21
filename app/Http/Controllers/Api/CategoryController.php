<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\PutRequest;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::paginate(5);
        return response()->json($category); 
    }

    public function all()
    {
        $category = Category::get();
        return response()->json($category); 
    }

    public function slug($slug)
    {
        $category = Category::where("slug", $slug)->firstOrFail();
        return response()->json($category); 
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        return response()->json(Category::create($data));
    }

    public function show(Category $category)
    {
        return response()->json($category);
    }

    public function update(PutRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        return response()->json($category);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json('Registro eliminado correctamente.');
    }

    public function posts(Category $category)
    {
        $posts = Post::join('categories as C', 'C.id', '=', 'posts.category_id')
                            ->select('posts.*', 'C.title as category')
                            ->where('C.id', $category->id)
                            ->get();

                            //Para poder ver el query que forma sql
                            //->toSql
        
        return response()->json($posts);
    }
}
