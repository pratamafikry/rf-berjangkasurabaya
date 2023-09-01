<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Sesi;
use App\Models\Team;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $app = Appointment::query();

        $appdiv = Appointment::query();


        $app->when($request->sesi, function($query) use ($request){
            return $query->where('sesi', $request->sesi);
        });

        $app->when($request->team_id, function($query) use ($request){
            return $query->where('team_id', $request->team_id);
        });

        $appdiv->when($request->sesi, function($query) use ($request){
            return $query->where('sesi', $request->sesi);
        });

        $app->when($request->tgl_temu, function($query) use ($request){
            return $query->where('tgl_temu', $request->tgl_temu);
        });

        $appdiv->when($request->tgl_temu, function($query) use ($request){
            return $query->where('tgl_temu', $request->tgl_temu);
        });

        return view('dashboard.index', [
            'appsuper'=>$app->get(),
            'appointments'=>$app->where('kendaraan', 'Kantor')->get(),
            'appadmin'=>$app->where('team_id', auth()->user()->team->id)->get(),
            'appdivisi'=>$appdiv->where('divisi_id', auth()->user()->team->divisi_id)->get(),
            'teams'=>Team::all(),
            
        ]);
    }

    public function driverlihat(Request $request)
    {
        $app = Appointment::query();

        $app->when($request->sesi, function($query) use ($request){
            return $query->where('sesi', $request->sesi);
        });

        $app->when($request->tgl_temu, function($query) use ($request){
            return $query->where('tgl_temu', $request->tgl_temu);
        });

        return view('dashboard.driver', [
            'appointments'=>$app->where('kendaraan', 'Kantor')->get(),
            
        ]);
    }

    public function delete($id)
    {
        $data = Appointment::find($id);
        $data->delete();
        return redirect('/dashboard')->with('success', 'Appointment berhasil dihapus !');
    }
}
