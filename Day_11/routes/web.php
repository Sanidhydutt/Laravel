<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function ()
 {
    return view('welcome');
})->name('welcome');


// Route::get('/user', function ()
//  {
//     return view('user',['user'=>"Sanidhy Dutt"]);
// });


// Route::get('/user', function ()
//  {
//     $name = "sanidhy dutt";
//     return view('user',['name'=> $name , 'city' => "Guj" ]);
// });


Route::get('/user', function ()
 {
    return view('user')
    ->with('name', 'Sanidhy Dutt')
    ->with('city', 'Guj');
});




Route::fallback(function()
{
    return "<h1>404 page not found</h1>";
});


