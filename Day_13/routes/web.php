<?php 

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');



Route::get('/',[PageController::class,'showHome'])->name('home');

Route::get('/user',[PageController::class,'showUser'])->name('user');

Route::get('/user/{id}',[PageController::class,'showUserid'])->name('id');

Route::fallback(function () {
    return "<h1>404 page not found</h1>";
});


?>
