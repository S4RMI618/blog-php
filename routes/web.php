<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
//SEE POSTS
Route::resource('articulos', PostsController::class)
    ->parameters(['articulos' => 'post'])
    ->names('posts');
/* 
Route::get('/posts', [PostsController::class, 'posts'])
    ->name('posts.index');
//SEE POSTS CREATED
Route::get('/posts/create', [PostsController::class, 'create'])
    ->name('posts.create');
//CREATE POST
Route::post('/posts', [PostsController::class, 'store'])
    ->name('posts.store');
//SEE POST BY ID
Route::get('/posts/{post}', [PostsController::class, 'show'])
    ->name('posts.show');
//SEE POST FOR UPDATE
Route::get('/posts/{post}/edit', [PostsController::class, 'edit'])
    ->name('posts.edit');

Route::put('/posts/{post}', [PostsController::class, 'update'])
    ->name('posts.update');

Route::delete('/posts/{post}', [PostsController::class, 'destroy'])
    ->name('posts.destroy');
 */

/* Route::get('/prueba', function() {
    
    $post = Post::find(1);
    
    return dd($post->is_active);
}); */



/* Route::get('/posts/{id}/{f?}', function ($id, $f = null) {

    if ($f) {
        return "$id Post, made with $f";
    }
    return "$id post";
});
 */
