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
            'body' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        // Upload file
        $img = $request->file('image');
        $image_name = rand().'_'.time().'_'.$img->getClientOriginalName();
        // rr.jpg => 6546545646_5466546548_rr.jpg
        $img->move(public_path('uploads'), $image_name);

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $image_name
        ]);

        return redirect()->route('posts.index')->with('msg', 'Post added successfully')->with('type', 'success');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('posts.index')->with('msg', 'Post delete successfully')->with('type', 'danger');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5|max:40',
            'body' => 'required',
            'image' => 'nullable|image|mimes:png,jpg,jpeg'
        ]);

        $post = Post::find($id);
        $image_name = $post->image;

        if($request->hasFile('image')) {
            // Upload file
            $img = $request->file('image');
            $image_name = rand().'_'.time().'_'.$img->getClientOriginalName();
            $img->move(public_path('uploads'), $image_name);
        }

        $post->update([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $image_name
        ]);

        return redirect()->route('posts.index')->with('msg', 'Post updated successfully')->with('type', 'info');
    }
}
