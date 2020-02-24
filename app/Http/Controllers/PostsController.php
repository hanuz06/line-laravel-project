<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        // Everything below will require authentication
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'another' => '', // This field will not be validated(you can skip validation)
            'caption' => 'required',
            'image' => ['required','image'],
        ]);

        $imagePath = request('image')->store('uploads', 'public');

       auth()->user()->posts()->create([
           'caption' => $data['caption'],
           'image' => $imagePath,
       ]);

       return redirect('/profile/' . auth()->user()->id);

        // \App\Post::create($data);

        // dd(request()->all());
    }
}