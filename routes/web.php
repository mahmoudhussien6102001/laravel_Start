<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\posts\PostController;
// Authentication routes, only include if necessary for your project

use Illuminate\Support\Facades\Auth;//+
/*
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...

        Auth::routes();

// Define your website routes
Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/book', [MainController::class, 'book'])->name('book');
Route::get('/menu', [MainController::class, 'menu'])->name('menu');
    });


// If you plan to use a resource controller, uncomment and adjust accordingly
// Route::resource('resource_name', ResourceController::class);
*/

Route::get('/product' ,[ProductController::class ,'index'])->name('product.index');
Route::get('/product/create' ,[ProductController::class ,'create'])->name('product.create');
Route::post('/product' ,[ProductController::class ,'store'])->name('product.store');
Route::get('/product/{product}/edit' ,[ProductController::class ,'edit'])->name('product.edit');
Route::put('/product/{product}/update' ,[ProductController::class ,'update'])->name('product.update');
Route::delete('/product/{product}/destory' ,[ProductController::class ,'destroy'])->name('product.destory');
 // routing  posts 

Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post', [PostController::class, 'store'])->name('post.store');
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/{post}/update', [PostController::class, 'update'])->name('post.update');
Route::delete('/post/{post}/destroy', [PostController::class, 'destroy'])->name('post.destroy');


?>
