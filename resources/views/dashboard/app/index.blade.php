@extends('dashboard.layouts.main')

@section('container')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Kelola Appointment</h1>
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
              
                  @can('user')
                  <table class="table" id="user" >
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Tgl Buat</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Waktu</th>
                      <th scope="col">Sesi</th>
                      <th scope="col">Nama Client</th>
                      <th scope="col">Nama Karyawan</th>
                      <th scope="col">Team</th>
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
                      <td>{{$appointment->nama_client}}</td>
                      <td>{{$appointment->nama}}</td>
                      <td>{{auth()->user()->team->nama_team}}</td>
                      <td><a href="/dashboard/appointment/{{$appointment->slug}}" class="btn btn-info">Lihat</span></a></td>
                      {{-- <td><a href="/dashboard/appointment/{{$appointment->slug}}/edit" class="btn btn-warning">Edit</span></a></td> --}}
                    </tr>
                  @endforeach
                  @endcan

                  @can('admin')
                  <table class="table" id="data">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Tgl Buat</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Waktu</th>
                      <th scope="col">Sesi</th>
                      <th scope="col">Nama Client</th>
                      <th scope="col">Nama Karyawan</th>
                      <th scope="col">Team</th>
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
                      <td>{{$appointment->nama_client}}</td>
                      <td>{{$appointment->nama}}</td>
                      <td>{{auth()->user()->team->nama_team}}</td>
                      <td><a href="/dashboard/appointment/{{$appointment->slug}}" class="btn btn-info">Lihat</span></a></td>
                      {{-- <td><a href="/dashboard/appointment/{{$appointment->slug}}/edit" class="btn btn-warning">Edit</span></a></td> --}}
                    </tr>
                  @endforeach
                  @endcan

                  @can('superadmin')
                  <table class="table" id="data">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Tgl Buat</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Waktu</th>
                      <th scope="col">Sesi</th>
                      <th scope="col">Nama Client</th>
                      <th scope="col">Nama Karyawan</th>
                      <th scope="col">Team</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($superapp as $appointment)
                    <tr>
                      <td>{{$loop ->iteration}}</td>
                      <td>{{$appointment->tgl_buat}}</td>
                      <td>{{$appointment->tgl_temu}}</td>
                      <td>{{$appointment->jam}}</td>
                      <td>{{$appointment->sesi}}</td>
                      <td>{{$appointment->nama_client}}</td>
                      <td>{{$appointment->nama}}</td>
                      <td>{{$appointment->team}}</td>
                      <td><a href="/dashboard/appointment/{{$appointment->slug}}" class="btn btn-info">Lihat</span></a></td>
                      {{-- <td><a href="/dashboard/appointment/{{$appointment->slug}}/edit" class="btn btn-warning">Edit</span></a></td> --}}
                    </tr>
                  @endforeach
                  @endcan
                </tbody>
              </table>
              <a href="/dashboard/appointment/create" class="btn btn-primary mb-3 mt-2" style="float: right">Buat Appointment</a>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

 

  @endsection