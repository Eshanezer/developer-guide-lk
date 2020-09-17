<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $categories = Category::all()->take(6);

        $posts = Post::orderBy('id','desc')->take(6)->get();
        return view('welcome',compact('categories','posts'));
    }
}
