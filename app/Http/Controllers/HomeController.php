<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::translatedIn(app()->getLocale())
            ->latest()
            ->take(10)
            ->get();

        return view('home', compact('posts'));
    }
}
