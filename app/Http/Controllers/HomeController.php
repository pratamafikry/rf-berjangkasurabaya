<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('index', [
            "title" => "Home"
        ]);
    }

    public function ilustrasi()
    {
        return view('ilustrasi');
    }

    public function broker()
    {
        return view('broker');
    }
    public function kelebihan()
    {
        return view('kelebihan');
    }
    public function ole()
    {
        return view('ole');
    }
    public function gol()
    {
        return view('gol');
    }
    public function gol250()
    {
        return view('gol250');
    }
    public function spa1()
    {
        return view('spa1');
    }
    public function spa2()
    {
        return view('spa2');
    }
    public function spa3()
    {
        return view('spa3');
    }
    public function spa4()
    {
        return view('spa4');
    }
    public function spa5()
    {
        return view('spa5');
    }
    public function spa6()
    {
        return view('spa6');
    }
    public function spa7()
    {
        return view('spa7');
    }
    public function spa8()
    {
        return view('spa8');
    }
    public function online()
    {
        return view('online');
    }
    public function offline()
    {
        return view('offline');
    }
    public function penarikan()
    {
        return view('penarikan');
    }
    public function petunjuk()
    {
        return view('petunjuk');
    }
    public function legalitas()
    {
        return view('legalitas');
    }
    public function alasan()
    {
        return view('alasan');
    }
    public function loco()
    {
        return view('loco');
    }
}
