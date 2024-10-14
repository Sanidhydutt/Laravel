<?php 

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;

Route::controller(PageController::class)->group(function()
{

    Route::get('/','showHome')->name('home');

    Route::get('/blog','showBlog')->name('blog');
    
    Route::get('/user/{id}',[PageController::class,'showUser'])->name('user');
    
});

Route::get('/test',TestingController::class);

Route::fallback(function () 
{
    return "<h1>404 page not found</h1>";
});


?>