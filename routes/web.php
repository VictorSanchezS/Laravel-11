<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class);

Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/create', [PostController::class,'create']);
Route::get('/posts/{post}',[PostController::class,'show']);


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