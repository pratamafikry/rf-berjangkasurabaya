<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'password' => 'required|min:5|max:255',
        ]);

        auth()->user()->update(['password' => bcrypt($request->password)]);

        return redirect('/dashboard');
    }
}
