<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function ()
 {
    return view('welcome');
});


Route::get('/post', function ()
{
    return view('post');
    // return "<h1>ouh</h1>";
});

Route::get('post/2post', function ()
{
    return view('2post');
});

//another Method

//Route::view('post','/post');

//hide one 

// Route::get('/hello', function ()
//  {
//     return view('post');
// });