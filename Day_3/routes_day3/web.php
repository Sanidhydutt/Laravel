<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function ()
 {
    return view('welcome');
})->name('home');


Route::get('/post', function ()
{
    return view('post');
    //postttttt got an error but use name function user cant got any error ok
})->name('mypost');

// if user change about name to test for some reason soo 
//other user bookmarked this webpage cant open it so here is a redirect function

Route::get('/test', function ()
{
    return view('about');
});

Route::redirect('/about','/test',301);

// 301 is status thats redirection is permanet specialy use for 
// search enigine (redirect code wiki)
