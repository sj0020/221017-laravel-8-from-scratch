<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts');
});

Route::get('posts/{post}', function ($slug) {
    $path = __DIR__ . "/../resources/posts/{$slug}.html";

    if (! file_exists($path)) {
        // option1 : show error message
            // ddd('file does not exist');
            // dd('file does not exist');
        // option2 : show 404 error
            // abort(404);
        // option3 : send back to homepage
            return redirect('/');


    }

    $post = file_get_contents($path);

    return view('post', [
        'post' => $post

    ]);
});

