<?php

namespace App\Http\Controllers;
use App\Models\Post;


use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //$posts= Post::all();
     //   $posts= Post::latest()->get();
        $posts = Post::paginate(10);
        return view('posts.index',[
            'posts'=>$posts
        ]);
    }

    public function show(Post $post)
    {

        return view('posts.show',[
            'post'=>$post,
        ]);
    }
}
