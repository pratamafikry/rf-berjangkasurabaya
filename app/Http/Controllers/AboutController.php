<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return view('about', [
            "title" => "About",
            "name" => "Fikry Galih Pratama",
            "email" => "pratamafikry009@gmail.com",
            "image" => "foto.jpg"
        ]);
    }
}
