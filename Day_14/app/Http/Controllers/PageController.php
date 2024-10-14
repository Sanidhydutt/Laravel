<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome() 
    {
        return view('welcome');
    //    return "<h1>Welcome To Controller Lecture</h1>"; 
    }

    public function showUser(string $id) 
    {
        
        return view('user',compact('id'));
        // return view('user',['id' => $id]);
    }

    public function showBlog() 
    {
        return view('blog');
    }


}
