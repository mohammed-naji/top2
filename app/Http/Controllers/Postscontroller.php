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
        // dd(request()->all());
        // if(request()->count != 'all') {
        //     $count = 20;
        //     if(request()->has('count')) {
        //         $count = request()->count;
        //     }
        //     if(request()->count == 'all') {
        //         $count = Post::count();
        //     }
        //     $posts = Post::orderByDesc('id')->paginate($count);
        // }else {
        //     $posts = Post::orderByDesc('id')->get();
        // }

        $count = 20;

        if(request()->has('count')) {
            $count = request()->count;
        }
        if(request()->count == 'all') {
            $count = Post::count();
        }
        if(request()->has('s') && !empty(request()->s)) {
            $posts = Post::orderByDesc('id')->where('title', 'like', '%'.request()->s.'%')->paginate($count);
        }else {
            $posts = Post::orderByDesc('id')->paginate($count);
        }

        // echo $count;
        // exit;

        //

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:40',
            'body' => 'required'
        ]);

        Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect()->route('posts.index')->with('msg', 'Post added successfully')->with('type', 'success');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('posts.index')->with('msg', 'Post delete successfully')->with('type', 'danger');
    }
}
