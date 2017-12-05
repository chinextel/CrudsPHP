<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Model\Post;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(){
        $objetos = Post::orderBy('id','desc')->paginate(10);
        //$objetos = Post::get();
        return view('index',compact('objetos'));
    }

    public function create(){
        return view('create');
    }

    public function store(CreatePostRequest $request) {
        /*
        $post = new Post;
        $post->title = $request->get('title');
        $post->description = $request->get('description');
        $post->url = $request->get('url');
        $post->save();
        */
        $post = Post::create($request->only('title','description'));

        return redirect()->route('post_path');
    }

    public function edit(Request $post){

        $objeto = Post::find($post->post);

        return view('edit')->with(['post' => $objeto]);
    }

    public function update(Request $post){


        $objeto = new Post;
        $objeto->title = $post->get('title');
        $objeto->description = $post->get('description');
        $objeto->url = $post->get('url');
        $objeto->save();

        return redirect()->route('post_path');
    }

    public function delete(Post $post){

        $post->delete();

        return redirect()->route('post_path');
    }
}
