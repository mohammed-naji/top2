<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('url', 'action);
Route::post('url', 'action);
Route::put('url', 'action);
Route::patch('url', 'action);
Route::delete('url', 'action);
*/

Route::get('/', function() {
    return 'Homepage';
})->name('mainpage');

Route::get('/about', function() {
    return 'About Us Page';
});

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

