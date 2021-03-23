<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();
        $posts = Post::select(['id', 'title_' . $locale, 'full_text_' . $locale])
            ->latest()
            ->whereNotNull('title_' . $locale)
            ->where('title_' . $locale, '!=', '')
            ->take(10)
            ->get();

        return view('home', compact('posts'));
    }
}
