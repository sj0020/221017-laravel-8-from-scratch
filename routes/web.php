<?php
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


// use Faker\Core\File;
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
    $posts = Post::latest();
    // ddd($posts);

    if (request('search')) {
        $posts
            ->where('title','like','%' . request('search') . '%')
            ->orWhere('body','like','%' . request('search') . '%');
    }

    return view('posts', [
        'posts' => $posts->get(),
        'categories' => Category::all()
    ]);
})->name('home');


Route::get('posts/{post:slug}', function (Post $post) { //Post::where('slug', %post)->firstOrFail()
    // Find a post by its post and pass it to a view called 'post'
    // $post = Post::findOrFail($post);

    return view('post', [
        'post' => $post
    ]);
});
// }) ->whereAlpha('post');

Route::get('categories/{category:slug}', function (Category $category) {

    return view('posts', [
        'posts'=> $category->posts,
        'currentCategory'=> $category,
        'categories' => Category::all()

    ]);
})->name('category');

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'posts'=> $author->posts,
        'categories' => Category::all()
    ]);
});
