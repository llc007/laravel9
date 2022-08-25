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

        //Envio un nuevo post vacio para que no se caiga el formulario en la vista
        return view('posts.create',['post'=>new Post()]);
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

        session()->flash('status','Post Creado');


        // Lo mismo que redirect
        return to_route('posts.index');
    }

    public function edit(Post $post){


        return view('posts.edit',['post'=>$post]);

    }

    public function update(Request $request,Post $post){


        //        $post = Post::findOrFail($post->id);

        $request->validate([
            'title'=>['required', 'min:4'],
            'body'=>['required'],
        ]);

        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        session()->flash('status','Post Actualizado');


        // Lo mismo que redirect
        return to_route('posts.show',$post);

    }
}
