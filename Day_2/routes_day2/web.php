<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function ()
 {
    return view('welcome');
});


Route::get('post/2post', function ()
{
    return view('2post');
});

Route::get('/post/{id?}/{comment?}', function (string $id = NULL, string $comment = NULL)
{
    if($id)
    {
    return ("<h1>POST ID ".$id."</h1><h2>".$comment."</h2>");
    }
    else
    {
    return ("<h1>NO ID FOUND</h1>");
    }
})->where('id', '[a-zA-Z0-9_-]+')->whereAlpha('comment');

//number -> whereNumber('id')
// string -> whereAlpha('id')
// both ->whereAlphaNumeric('id');
// only some values array ->whereIn('id',['sanidhy','movie','song']);
// Regular expression ->where('id', '[a-zA-Z0-9_-]+');
