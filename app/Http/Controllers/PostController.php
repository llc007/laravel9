<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
//    Middleware
public function __construct(){
    $this->middleware('auth',['except'=>['index','show']]);
}

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
    public function store(SavePostRequest $request){
//        $post = Post::findOrFail($post->id);

//        $request->validate([
//            'title'=>['required', 'min:4'],
//            'body'=>['required'],
//            ]);

//        $post = new Post;
//        $post->title = $request->input('title');
//        $post->body = $request->input('body');
//        $post->save();

//        Post::create([
//            'title'=>$request->input('title'),
//            'body'=>$request->input('body'),
//        ]);

        Post::create($request->validated());

        session()->flash('status','Post Creado');


        // Lo mismo que redirect
        return to_route('posts.index');
    }

    public function edit(Post $post){


        return view('posts.edit',['post'=>$post]);

    }

    public function update(SavePostRequest $request,Post $post){


        //        $post = Post::findOrFail($post->id);

//        $validated = $request->validate([
//            'title'=>['required', 'min:4'],
//            'body'=>['required'],
//        ]);

//        $post->title = $request->input('title');
//        $post->body = $request->input('body');
//        $post->save();

//        $post->update($validated);

        $post->update($request->validated());

//        session()->flash('status','Post Actualizado');


        // Lo mismo que redirect
        return to_route('posts.show',$post)->with('status','Post actualizado');

    }

    public function destroy(Post $post){

        $post->delete();
        return to_route('posts.index')->with('status','post eliminado correctamente');
    }
}
