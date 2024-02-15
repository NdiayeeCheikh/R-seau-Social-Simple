<?php

namespace App\Http\Controllers;
use App\Models\Post;


use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
class PostController extends Controller
{
    public function index()
    {
        //$posts= Post::all();
     //   $posts= Post::latest()->get();
      //  $posts = Post::paginate(10);
        return view('posts.index',[
            'posts'=> Post::latest()->paginate(10)
        ]);
    } 
    public function postsByCategory(Category $category)
    {
        return view('posts.index',[
          //  'posts'=> $category->posts()->paginate(10)
          'posts'=> Post::where(
            'category_id',$category->id
          )->latest()->paginate(10)
        ]);
    }
    public function postsByTag(Tag $category)
    {
        return view('posts.index',[
          //  'posts'=> $category->posts()->paginate(10)
          'posts'=> Post::where(
            'category_id',$category->id
          )->latest()->paginate(10)
        ]);
    }
    public function show(Post $post)
    {

        return view('posts.show',[
            'post'=>$post,
        ]);
    }
}
