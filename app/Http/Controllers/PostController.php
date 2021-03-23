<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePostRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        Post::create($request->validated());

        return redirect()->route('dashboard');
    }
}
