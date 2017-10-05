<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function show($id)
    {
        return view('posts.show', ['post' => Post::findOrFail($id)]);
    }

    public function index()
    {
        return view('posts.index', ['posts' => Post::orderBy('created_at')->get()]);
    }
}
