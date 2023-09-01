<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Post",
            "posts" => Post::latest()->paginate(7)
        ]);
    }

    public function kegiatan()
    {
        return view('kegiatan', [
            "posts" => Post::where('category_id', '2')->get()
        ]);
    }
    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
