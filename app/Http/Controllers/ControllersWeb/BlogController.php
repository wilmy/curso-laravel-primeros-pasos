<?php

namespace App\Http\Controllers\ControllersWeb;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function index()
    {
        $posts = Post::where("posted", "yes")->paginate(3);
       return view("web.blog.index", compact("posts"));
    }

    public function show(Post $post)
    {
        return view("web.blog.show", compact("post"));
    }

}
