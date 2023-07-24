@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Appointment</h1>
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{session('success')}}
  </div>
  @endif
  
  <div class="table-responsive">
    {{-- <a href="/dashboard/appointment/create" class="btn btn-primary mb-3" style="float: right">Buat Appointment</a> --}}
    <table class="table datatable">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Waktu</th>
              <th scope="col">Sesi</th>
              <th scope="col">Alamat</th>
              <th scope="col">Nama Karyawan</th>
              <th scope="col">Team</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            @foreach ($appointments as $appointment)
            <tr>
              <td>{{$loop ->iteration}}</td>
              <td>{{$appointment->tgl_temu}}</td>
              <td>{{$appointment->jam}}</td>
              <td>{{$appointment->sesi}}</td>
              <td>{{$appointment->alamat}}</td>
              <td>{{$appointment->nama}}</td>
              <td>{{$appointment->team}}</td>
              <td><a href="/dashboard/appointment/{{$appointment->slug}}" class="btn btn-info">Pick Up</span></a></td>
              {{-- <td><a href="/dashboard/appointment/{{$appointment->slug}}/edit" class="btn btn-warning">Edit</span></a></td> --}}
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection