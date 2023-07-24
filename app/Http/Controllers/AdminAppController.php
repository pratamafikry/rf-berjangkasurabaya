<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminAppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.index', [
            'users' => User::where('team_id', auth()->user()->team_id)->get(),
            'useradmin'=>User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return $user;
        // return view('dashboard.admin.edit',[
        //     'user'=>$user,
        // ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/dashboard/marketing')->with('success', 'Akun berhasil dihapus!');
    }

    public function delete($id){
        
        $data = User::find($id);
        $data->delete();
        return redirect('/dashboard/marketing')->with('success', 'Akun berhasil dihapus!');
    }
}
