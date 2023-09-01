<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Register',
            'teams' => Team::where('id', auth()->user()->team_id)->get(),
            'teamdiv' => Team::where('divisi_id', auth()->user()->divisi_id)->get(),
            'teamsuper' => Team::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'username'=> 'required|min:3|max:255|unique:users',
            // 'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'team_id' => 'required',
            'divisi_id' => 'required'

        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        $request->session()->flash('success', 'Registrasi Berhasil !');
        return redirect('/dashboard/marketing');
    }

    public function getDiv($id)
    {
        $div= Team::find($id);
        return response()->json($div);
    }
}
