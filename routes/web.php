<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\MainController;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/book', [MainController::class, 'book'])->name('book');
Route::get('/menu', [MainController::class, 'menu'])->name('menu');
// Route::resource();

?>
