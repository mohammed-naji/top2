<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site1Controller extends Controller
{
    public function index()
    {
        $name = 'Ahmed Ali';
        $desc = 'This is an exaxmple website';
        // return view('index')->with('name', $name)->with('desc', $desc);
        // return view('index', [
        //     'name' => $name,
        //     'desc' => $desc
        // ]);

        return view('site1.index', compact('name', 'desc'));
    }

    public function about()
    {
        return view('site1.about');
    }

    public function post()
    {
        return view('site1.post');
    }

    public function contact()
    {
        return view('site1.contact');
    }

}
