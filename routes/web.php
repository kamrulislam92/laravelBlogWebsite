<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrivecyController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index'); 
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index'); 
Route::get('/privecy', [PrivecyController::class, 'index'])->name('privecy.index'); 


// Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show'); // Show a single blog
// Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create'); // Form to create a blog
// Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store'); // Store a new blog
// Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit'); // Edit blog
// Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update'); // Update blog
// Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy'); // Delete blog