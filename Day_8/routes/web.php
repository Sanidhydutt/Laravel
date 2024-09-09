<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function ()
 {
    return view('home');
})->name('home');

Route::get('/about', function ()
 {
    return view('about');
});


Route::get('/post', function ()
 {
    return view('post');
});




Route::fallback(function()
{
    return "<h1>404 page not found</h1>";
});


