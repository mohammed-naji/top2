<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Postscontroller extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::simplepaginate(20);
        $posts = Post::orderByDesc('id')->paginate(20);
        // $posts = Post::orderByDesc('id')->get();

        return view('posts.index', compact('posts'));
    }
}
