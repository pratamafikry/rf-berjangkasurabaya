@extends('dashboard.layouts.main')
@section('container')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Selamat Datang {{auth()->user()->name}} - {{auth()->user()->team->nama_team}}</h1>
    </div><!-- End Page Title -->
    
    @if(session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{session('success')}}
  </div>
  @endif


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Appointment</h5>
              <form action="/dashboard" method="get">
                @csrf
              <div class="row mb-3">
                <div class="col-sm-3">
                  <label>Sesi</label>
                  <select class="form-control" name="sesi" id="sesi">
                    <option value="">Pilih Sesi</option>
                    <option value="Sesi 1">Sesi 1</option>
                    <option value="Sesi 2">Sesi 2</option>
                    <option value="Sesi 3">Sesi 3</option>
                  </select>
                </div>
                <div class="col-sm-3">
                  <label for="tgl_temu" class="form-label">Tanggal </label>
                  <input type="date" class="form-control" name="tgl_temu" id="tgl_temu">  
              </div>
              @can('receptionist')
              <div class="col-sm-3">
                <label>Team</label>
                <select class="form-control" name="team_id" id="team_id">
                  <option value="">Pilih Team</option>
                  @foreach($teams as $team)
                  <option value="{{$team->id}}">{{$team->nama_team}}</option>
                  @endforeach
                </select>
              </div>
              @endcan
                <div class="col-sm-3">
                  <button type="submit" class="btn btn-primary mt-4">Search</button>
                </div>
              </div>
            </form>
               {{-- <code>.datatable</code> --}}

              <!-- Table with stripped rows -->
              @can('driver')
              <table class="table" id="user">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal Input</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Sesi</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nama Karyawan</th>
                    <th scope="col">Team</th>
                    <th scope="col">Driver</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($appointments as $appointment)
                  <tr>
                    <td>{{$loop ->iteration}}</td>
                    <td>{{$appointment->tgl_buat}}</td>
                    <td>{{$appointment->tgl_temu}}</td>
                    <td>{{$appointment->jam}}</td>
                    <td>{{$appointment->sesi}}</td>
                    <td>{{$appointment->alamat}}</td>
                    <td>{{$appointment->nama}}</td>
                    <td>{{$appointment->team}}</td>
                    <td>{{$appointment->driver->name}} ({{$appointment->driver->plat_mobil}})</td>
                    <td><a href="/dashboard/appointment/{{$appointment->slug}}/edit" class="btn btn-warning">Edit</span></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
             
              @endcan

              @can('admin')
              <table class="table" id="data">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Sesi</th>
                    <th scope="col">Nama Nasabah</th>
                    <th scope="col">Pendamping</th>
                    <th scope="col">Tujuan Appointment</th>
                    <th scope="col">Status Nasabah</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nama Karyawan</th>
                    <th scope="col">Team</th>
                    <th scope="col">Kendaraan</th>
                    <th scope="col">Driver</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($appadmin as $appointment)
                  <tr>
                    <td>{{$loop ->iteration}}</td>
                    <td>{{$appointment->tgl_temu}}</td>
                    <td>{{$appointment->jam}}</td>
                    <td>{{$appointment->sesi}}</td>
                    <td>{{$appointment->nama_client}}</td>
                    <td>{{$appointment->pendamping}}</td>
                    <td>{{$appointment->tujuan}}</td>
                    <td>{{$appointment->status}}</td>
                    <td>{{$appointment->alamat}}</td>
                    <td>{{$appointment->nama}}</td>
                    <td>{{$appointment->team}}</td>
                    <td>{{$appointment->kendaraan}}</td>
                    <td>{{$appointment->driver->name}} ({{$appointment->driver->plat_mobil}})</td>
                    {{-- <td><a href="/dashboard/appointment/{{$appointment->slug}}/edit" class="btn btn-warning">Edit</span></a></td> --}}
                  </tr>
                  @endforeach
                </tbody>
              </table>
             
              @endcan

              @can('user')
              <table class="table" id="user">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Sesi</th>
                    <th scope="col">Nama Nasabah</th>
                    <th scope="col">Pendamping</th>
                    <th scope="col">Tujuan Appointment</th>
                    <th scope="col">Status Nasabah</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nama Karyawan</th>
                    <th scope="col">Team</th>
                    <th scope="col">Kendaraan</th>
                    <th scope="col">Driver</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($appadmin as $appointment)
                  <tr>
                    <td>{{$loop ->iteration}}</td>
                    <td>{{$appointment->tgl_temu}}</td>
                    <td>{{$appointment->jam}}</td>
                    <td>{{$appointment->sesi}}</td>
                    <td>{{$appointment->nama_client}}</td>
                    <td>{{$appointment->pendamping}}</td>
                    <td>{{$appointment->tujuan}}</td>
                    <td>{{$appointment->status}}</td>
                    <td>{{$appointment->alamat}}</td>
                    <td>{{$appointment->nama}}</td>
                    <td>{{$appointment->team}}</td>
                    <td>{{$appointment->kendaraan}}</td>
                    <td>{{$appointment->driver->name}} ({{$appointment->driver->plat_mobil}})</td>
                    {{-- <td><a href="/dashboard/appointment/{{$appointment->slug}}/edit" class="btn btn-warning">Edit</span></a></td> --}}
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
              @endcan

              @can('superadmin')
              <table class="table" id="data">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Sesi</th>
                    <th scope="col">Pendamping</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nama Karyawan</th>
                    <th scope="col">Team</th>
                    <th scope="col">Driver</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($appsuper as $appointment)
                  <tr>
                    <td>{{$loop ->iteration}}</td>
                    <td>{{$appointment->tgl_temu}}</td>
                    <td>{{$appointment->jam}}</td>
                    <td>{{$appointment->sesi}}</td>
                    <td>{{$appointment->pendamping}}</td>
                    <td>{{$appointment->alamat}}</td>
                    <td>{{$appointment->nama}}</td>
                    <td>{{$appointment->team}}</td>
                    <td>{{$appointment->driver->name}} ({{$appointment->driver->plat_mobil}})</td>
                    {{-- <td><a href="/dashboard/appointment/{{$appointment->slug}}/edit" class="btn btn-warning">Edit</span></a></td> --}}
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
              @endcan

              @can('receptionist')
              <table class="table" id="data">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Nama Karyawan</th>
                    <th scope="col">Team</th>
                    <th scope="col">Manager</th>
                    <th scope="col">Pendamping</th>
                    <th scope="col">Nama Nasabah</th>
                    <th scope="col">Status Nasabah</th>
                    <th scope="col">Tujuan Appointment</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kendaraan</th>
                    <th scope="col">Driver</th>
                    <th scope="col">Hasil</th>
                    <th scope="col">Status BAS</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($appsuper as $appointment)
                  <tr>
                    <td>{{$loop ->iteration}}</td>
                    <td>{{$appointment->tgl_temu}}</td>
                    <td>{{$appointment->jam}}</td>
                    <td>{{$appointment->nama}}</td>
                    <td>{{$appointment->team}}</td>
                    <td>{{$appointment->manager}}</td>
                    <td>{{$appointment->pendamping}}</td>
                    <td>{{$appointment->nama_client}}</td>
                    <td>{{$appointment->status}}</td>
                    <td>{{$appointment->tujuan}}</td>
                    <td>{{$appointment->alamat}}</td>
                    <td>{{$appointment->kendaraan}}</td>
                    <td>{{$appointment->driver->name}} ({{$appointment->driver->plat_mobil}})</td>
                    <td>{{$appointment->hasil}}</td>
                    <td>{{$appointment->status_bas}}</td>
                    <td><a href="/dashboard/appointment/{{$appointment->slug}}/edit" class="btn btn-info">Update</span></a>
                    <a href="/app/delete/{{$appointment->id}}" onclick="return confirm('Hapus Appointment?')" class="btn btn-danger">Hapus</a>
                    </td>
                    
                  </tr>
                  @endforeach
                </tbody>
              </table>
              @endcan

              @can('kadiv')
              <table class="table" id="data">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Sesi</th>
                    <th scope="col">Nama Nasabah</th>
                    <th scope="col">Pendamping</th>
                    <th scope="col">Tujuan Appointment</th>
                    <th scope="col">Status Nasabah</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nama Karyawan</th>
                    <th scope="col">Team</th>
                    <th scope="col">Divisi</th>
                    <th scope="col">Kendaraan</th>
                    <th scope="col">Driver</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($appdivisi as $appointment)
                  <tr>
                    <td>{{$loop ->iteration}}</td>
                    <td>{{$appointment->tgl_temu}}</td>
                    <td>{{$appointment->jam}}</td>
                    <td>{{$appointment->sesi}}</td>
                    <td>{{$appointment->nama_client}}</td>
                    <td>{{$appointment->pendamping}}</td>
                    <td>{{$appointment->tujuan}}</td>
                    <td>{{$appointment->status}}</td>
                    <td>{{$appointment->alamat}}</td>
                    <td>{{$appointment->nama}}</td>
                    <td>{{$appointment->team}}</td>
                    <td>{{$appointment->divisi->name}}</td>
                    <td>{{$appointment->kendaraan}}</td>
                    <td>{{$appointment->driver->name}} ({{$appointment->driver->plat_mobil}})</td>
                    {{-- <td><a href="/dashboard/appointment/{{$appointment->slug}}/edit" class="btn btn-warning">Edit</span></a></td> --}}
                  </tr>
                  @endforeach
                </tbody>
              </table>
              @endcan
              {{-- <a href="/dashboard/driver/create" class="btn btn-primary mb-3" style="float: right">Tambah Driver</a> --}}
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>

  
  

      

  </main><!-- End #main -->
@endsection