<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\Postscontroller;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\Site1Controller;
use App\Http\Controllers\Site2Controller;

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

Route::prefix('site1')->name('site1.')->group(function() {

    Route::get('/', [Site1Controller::class, 'index'])->name('index');

    Route::get('/about-me', [Site1Controller::class, 'about'])->name('about');

    Route::get('/post', [Site1Controller::class, 'post'])->name('post');

    Route::get('/contact-me', [Site1Controller::class, 'contact'])->name('contact');

    Route::post('/contact', [Site1Controller::class, 'contact_data'])->name('contact_data');

});


Route::prefix('site2')->name('site2.')->group(function() {
    Route::get('/', [Site2Controller::class, 'index'])->name('index');
    Route::get('/features', [Site2Controller::class, 'features'])->name('features');
    Route::get('/download', [Site2Controller::class, 'download'])->name('download');
    Route::get('/contact', [Site2Controller::class, 'contact'])->name('contact');
    Route::post('/contact', [Site2Controller::class, 'contact_data'])->name('contact_data');
});


Route::get('form1', [FormsController::class, 'form1'])->name('form1');
Route::post('form1', [FormsController::class, 'form1_data'])->name('form1_data');


Route::get('form2', [FormsController::class, 'form2'])->name('form2');
Route::post('form2', [FormsController::class, 'form2_data'])->name('form2_data');


Route::get('form3', [FormsController::class, 'form3'])->name('form3');
Route::post('form3', [FormsController::class, 'form3_data'])->name('form3_data');

Route::get('form4', [FormsController::class, 'form4'])->name('form4');
Route::post('form4', [FormsController::class, 'form4_data'])->name('form4_data');


// Route::get('posts', [Postscontroller::class, 'index'])->name('posts.index');

// Route::get('posts/create', [Postscontroller::class, 'create'])->name('posts.create');
// Route::post('posts/store', [Postscontroller::class, 'store'])->name('posts.store');

// Route::delete('posts/{id}', [Postscontroller::class, 'destroy'])->name('posts.destroy');

// Route::get('posts/{id}/edit', [Postscontroller::class, 'edit'])->name('posts.edit');
// Route::put('posts/{id}/update', [Postscontroller::class, 'update'])->name('posts.update');

Route::resource('posts', Postscontroller::class);
Route::resource('categories', TagsController::class);

Route::get('send-mail', [MailController::class, 'send']);

Route::get('contact-us', [MailController::class, 'contact_us'])->name('contact_us');
Route::post('contact-us', [MailController::class, 'contact_us_data'])->name('contact_us_data');


Route::get('one-to-one', [RelationController::class, 'one_to_one']);
Route::get('one-to-many', [RelationController::class, 'one_to_many']);
Route::post('one-to-many', [RelationController::class, 'one_to_many_data'])->name('one_to_many_data');

Route::get('many-to-many', [RelationController::class, 'many_to_many']);
