<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function ()
 {
    return view('welcome');
})->name('home');

Route::prefix('page')->group(function()
{  
Route::get('/about',function()
{
    return "<h1>About The Page</h1>";
});

Route::get('/gallery',function()
{
    return "<h1>Gallery Page</h1>";
});

Route::get('/post/firstpost',function()
{
    return "<h1>first post Page</h1>";
});

});

// Route::get('page/about',function()
// {
//     return "<h1>About The Page</h1>";
// });

// Route::get('page/gallery',function()
// {
//     return "<h1>Gallery Page</h1>";
// });

// Route::get('page/post/firstpost',function()
// {
//     return "<h1>first post Page</h1>";
// });

// if you got an error and show through code
//here is function see that 

Route::fallback(function()
{
    return "<h1>404 page not found</h1>";
});


