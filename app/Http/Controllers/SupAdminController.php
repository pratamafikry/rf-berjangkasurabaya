<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SupAdmin extends Controller
{
    public function index()
    {
        return view('dashboard.supadmin.lihat.index', [
            "users" => User::all(),
        ]);
    }
}
