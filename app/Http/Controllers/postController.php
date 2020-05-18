<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use App\Post;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function accueil()
    {
        $posts = Post::all()->sortByDesc('created_at');
        return view('accueil')->with('posts', $posts);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all()->sortByDesc('created_at');
        return view('listPost')->with('posts', $posts);

    }

    public function store(Request $request, $id = "")
    {

        if($id > 0 ){
            $post = Post::where('id',$id)->first();
        }

        else {
            $post = new Post;
        }

        $post->titre = $request->titre;
        $post->contenu = $request->contenu;
        $post->save();

        $path = public_path();

        if ($request->hasFile('image')) {
            $request->file('image')->move($path .'/images/', $post->id . '.jpg');
        }

        return redirect()->route('postList');
    }

    public function edit(Request $request,$id)
    {
        $post = Post::where('id', $id)->first();
        return view('editPost')->with('post', $post);
    }

    public function delete($id)
    {
        Post::where('id',$id)->delete();
        return redirect()->route('postList');
    }


}
