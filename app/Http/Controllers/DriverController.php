<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\User;
use App\Http\Requests\StoreDriverRequest;
use App\Http\Requests\UpdateDriverRequest;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.driver.index', [
            'drivers' => Driver::all(),
            // 'drivers' => User::where('permission', auth()->user()->permission)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.driver.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDriverRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'plat_mobil' => 'required',
        ]);

        Driver::create($validatedData);
        return redirect('/dashboard/driver')->with('success', 'Driver berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Driver $driver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDriverRequest $request, Driver $driver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver)
    {
        //
    }

    public function delete($id){
        $data = Driver::find($id);
        $data->delete();
        return redirect('/dashboard/driver')->with('success', 'Driver berhasil dihapus!');
    }
}
