<?php 

use Illuminate\Support\Facades\Route;

function getusers() 
{
    return [
        1 => ['name' => 'amitabh', 'phone' => '1234567890', 'city' => 'delhi'],
        2 => ['name' => 'shahrukh', 'phone' => '0987654321', 'city' => 'mumbai'],
        3 => ['name' => 'salman', 'phone' => '111111111', 'city' => 'Guj'],
        4 => ['name' => 'Paneer', 'phone' => '9090909090', 'city' => 'USA']
    ];   
}

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/users', function () {
    $names = getusers();
    return view('users', ['user' => $names]);
});

Route::get('/users/{id}', function ($id) {
    $users = getusers();
    // Check if the user exists before accessing it
    abort_if(!isset($users[$id]), 404);
    $user = $users[$id];
    
    return view('user', ['id' => $user]);
})->name('view.user');

Route::fallback(function () {
    return "<h1>404 page not found</h1>";
});


?>