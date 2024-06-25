<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class);

Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class,'create'])->name('posts.create');
Route::post('/posts', [PostController::class,'store'])->name('posts.store');
Route::get('/posts/{post}',[PostController::class,'show'])->name('posts.show');
Route::get('/posts/{post}/edit',[PostController::class,'edit'])->name('posts.edit');
Route::put('/posts/{post}',[PostController::class,'update'])->name('posts.update');
Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('posts.destroy');


Route::get('prueba', function (){
    
    $post = new Post();
    $post->title = 'Titulo 3';
    $post->content = 'Contenido 3';
    $post->categoria = 'Categoria 3';
    $post->is_active = 0;
    $post->save();

    return $post;

    // dd($post->is_active);
});