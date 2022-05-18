<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $user = 'ali';
        $id = 15;

        // return url('post/'.$user.'/comments/'.$id);
        // return route('posts', [$user, $id]);
        return view('welcome');
    }

    public function about()
    {
        // return 'about page';
        return view('about');
    }

    public function team()
    {
        return 'team page';
    }

    public function services()
    {
        return 'services page';
    }

    public function contact()
    {
        return 'contact page';
    }

    public function user($name)
    {
        return 'Welcome ' . $name;
    }

    public function posts($name, $id)
    {
        return 'User Name '. $name . ', Comment Number ' . $id;
    }
}
