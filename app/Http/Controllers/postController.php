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

    public function store(Request $request)
    {

        $post = new Post;
        $post->titre = $request->titre;
        $post->contenu = $request->contenu;

        $path = public_path();

        if ($request->hasFile('image')) {
            $request->file('image')->move($path .'/images');
        }

        $post->save();

        return redirect()->route('postList');
    }


}
