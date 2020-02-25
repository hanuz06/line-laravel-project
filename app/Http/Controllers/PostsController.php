<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct()
    {
        // Everything below will require authentication
        $this->middleware('auth');
    }

    public function index(){
        $users = auth()->user()->following()->pluck('profiles.user_id');

        $posts = Post::whereIn('user_id', $users)->latest()->get();

        return view('posts.index', compact('posts')) ;
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'another' => '', // This field will not be validated(you can  skip validation)
            'caption' => 'required',
            'image' => ['required','image'],
        ]);

        //Image is in 'uploads' folder, in 'public' driver
        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();

       auth()->user()->posts()->create([
           'caption' => $data['caption'],
           'image' => $imagePath,
       ]);

       return redirect('/profile/' . auth()->user()->id);

        // \App\Post::create($data);

        // dd(request()->all());
    }

    public function show(\App\Post  $post){
        return view('posts.show', compact('post'));
    }
}
