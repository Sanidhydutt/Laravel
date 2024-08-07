<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function ()
 {
    return view('welcome');
});


Route::get('/post/{id?}/{comment?}', function (string $id = NULL, string $comment = NULL )
{
    if($id)
    {
    return ("<h1>POST ID ".$id."</h1><h2> Comment ".$comment."</h2>");
    }
    else
    {
    return ("<h1>NO ID FOUND</h1>");
    }
});

Route::get('post/2post', function ()
{
    return view('2post');
});
