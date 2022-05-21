<?php

use App\Http\Controllers\Site1Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

/*
Route::get('url', 'action);
Route::post('url', 'action);
Route::put('url', 'action);
Route::patch('url', 'action);
Route::delete('url', 'action);
*/
/*
Route::get('/', function() {
    // return url('/about');
    return route('aboutpage');
})->name('mainpage');

Route::get('/about', function() {
    return 'About Us Page';
})->name('aboutpage');

Route::get('news/{id}', function($id) {
    return 'News #'.$id;
});

// Route::get('users', function() {
//     return 'Welcome';
// });

Route::get('users/{name?}', function($name = null) {
    return 'Welcome '. $name;
});

// /admin/user
// /admin/posts
// /admin/products
// /admin/home
// /admin/comments

// $name = 'admin';

Route::prefix('admin')->group(function() {
    Route::get('/users', function() {});
    Route::get('/posts', function() {});
    Route::get('/products', function() {});
    Route::get('/home', function() {});
    Route::get('/comments', function() {});
});

// get, post, (put, patch), delete
Route::get('profile', function() {
    echo "Welcome Mohammed<br>";
    echo "Your Email: moh@gmail.com<br>";
    echo "Your Age: 28<br>";
});
*/


// Route::get('/', [SiteController::class, 'index'])->name('home');

// Route::get('/about', [SiteController::class, 'about'])->name('about');

// Route::get('/team', [SiteController::class, 'team'])->name('team');

// Route::get('/services', [SiteController::class, 'services'])->name('services');

// Route::get('/contact', [SiteController::class, 'contact'])->name('contact');

// Route::get('/user/{name}', [SiteController::class, 'user'])->name('user');

// Route::get('/postsssssssss/nrhnrhrghy/gufdgdfgsjsafg/{user}/comments/{id}', [SiteController::class, 'posts'])->name('posts');


Route::get('/', [Site1Controller::class, 'index'])->name('index');

Route::get('/about-me', [Site1Controller::class, 'about'])->name('about');

Route::get('/post', [Site1Controller::class, 'post'])->name('post');

Route::get('/contact-me', [Site1Controller::class, 'contact'])->name('contact');

Route::post('/contact', [Site1Controller::class, 'contact_data'])->name('contact_data');
