<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Driver;
use App\Models\Post;
use App\Models\Sesi;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardAppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.app.index', [
            'appointments' => Appointment::where('team_id', auth()->user()->team->id)->latest()->get(),
            'superapp'=>Appointment::latest()->get(),
            'divisiapp' => Appointment::where('divisi_id', auth()->user()->team->divisi_id)->latest()->get(),
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.app.create', [
            'sesis'=>Sesi::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'tgl_buat' => 'required',
            'tgl_temu' => 'required',
            'sesi_id' => 'required',
            'jam'=>'required',
            'manager' => 'required',
            'pendamping' => 'required',
            'nama_client' => 'required',
            'alamat' => 'required',
            'sesi' => 'required',
            'status' => 'required',
            'tujuan' => 'required',
            'kendaraan' => 'required',
            'nama' => 'required',
            'slug' => 'required',
            'divisi_id' => 'required'


        ]);

        $validatedData['team_id'] = auth()->user()->team->id;
        $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['nama']= auth()->user()->nama;
        $validatedData['team']= auth()->user()->team->nama_team;
        Appointment::create($validatedData);

        return redirect('/dashboard/appointment')->with('success', 'Appointment baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        // return $appointment;
        return view('dashboard.app.show',[
            'app'=> $appointment,
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        return view('dashboard.app.edit',[
            'app'=>$appointment,
            'drivers'=> Driver::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        $rules = [
            'tgl_buat' => 'required',
            'tgl_temu' => 'required',
            'sesi_id' => 'required',
            'jam'=>'required',
            'manager' => 'required',
            'pendamping' => 'required',
            'nama_client' => 'required',
            'alamat' => 'required',
            'sesi' => 'required',
            'status' => 'required',
            'tujuan' => 'required',
            'kendaraan' => 'required',
            'nama' => 'required',
            'driver_id' => 'required',
            'hasil' => 'required',
            'status_bas'=> 'required'
        ];

        if($request->slug != $appointment->slug)
            $rules['slug'] = 'required';

        $validatedData = $request->validate($rules);

        Appointment::where('id', $appointment->id)->update($validatedData);

        return redirect('/dashboard')->with('success', 'Appointment baru berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Appointment::class, 'slug', $request->nama_client );
        return response()->json(['slug'=>$slug]);
    }

    // public function detail(Appointment $appointment)
    // {
    //     return view('dashboard.app.show',[
    //         'apps' => $appointment,
    //     ]);
    // }

    public function getSesi($id)
    {
        $sesi= Sesi::find($id);
        return response()->json($sesi);
    }
}
