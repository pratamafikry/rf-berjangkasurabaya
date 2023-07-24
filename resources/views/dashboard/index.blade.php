@extends('dashboard.layouts.main')
@section('container')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Selamat Datang {{auth()->user()->name}}</h1>
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
               {{-- <code>.datatable</code> --}}

              <!-- Table with stripped rows -->
              @can('driver')
              <table class="table" id="user">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Sesi</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nama Karyawan</th>
                    <th scope="col">Team</th>
                    <th scope="col">Driver</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($appointments as $appointment)
                  <tr>
                    <td>{{$loop ->iteration}}</td>
                    <td>{{$appointment->tgl_temu}}</td>
                    <td>{{$appointment->jam}}</td>
                    <td>{{$appointment->sesi}}</td>
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
                  @foreach ($appsuper as $appointment)
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
              {{-- <a href="/dashboard/driver/create" class="btn btn-primary mb-3" style="float: right">Tambah Driver</a> --}}
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>

  </main><!-- End #main -->
@endsection