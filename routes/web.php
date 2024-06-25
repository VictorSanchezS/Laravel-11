<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', HomeController::class);
// //Exceptuar una ruta:
// Route::resource('posts', PostController::class)->except('destroy');

// //Exceptuar mas de una ruta:
// Route::resource('posts', PostController::class)->except(['destroy','edit']);

// //Selecionar solo las rutas que queremos usar:
// Route::resource('posts', PostController::class)->only(['index','create','store']);

// //Forma para cambiar la url pero mantener los nombres de las rutas y las variables
// Route::resource('articulos', PostController::class)->parameters(['articulos' => 'post'])->names('posts');

// //Para crear apis, no vamos a necesitar las vistas
// Route::apiResource('posts', PostController::class);

Route::resource('posts', PostController::class);