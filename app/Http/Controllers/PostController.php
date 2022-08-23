<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index()
    {
//       $posts = DB::table('posts')->get();
        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post){
//        $post = Post::findOrFail($post->id);

        return view('posts.show',['post' => $post]);
    }

    public function create(){
//        $post = Post::findOrFail($post->id);

        return view('posts.create');
    }
    public function store(Request $request){
//        $post = Post::findOrFail($post->id);

        $request->validate([
            'title'=>['required', 'min:4'],
            'body'=>['required'],
            ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        session()->flash('statius','POst Creado');


        // Lo mismo que redirect
        return to_route('posts.index');
    }
}