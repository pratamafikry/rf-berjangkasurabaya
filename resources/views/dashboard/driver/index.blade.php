@extends('dashboard.layouts.main')

@section('container')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Kelola Driver</h1>
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
              <h5 class="card-title">Data Driver</h5>
               {{-- <code>.datatable</code> --}}

              <!-- Table with stripped rows -->
              <table class="table" id="data">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Plat Nomor</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
              @can('driver')
              @foreach ($drivers as $driver)
              <tr>
              <td>{{$loop ->iteration}}</td>
              <td>{{$driver->name}}</td>
              <td>{{$driver->plat_mobil}}</td>
              {{-- <td>{{$user->email}}</td>
              <td>{{$user->team->nama_team}}</td> --}}
              <td>
                {{-- <a href="/dashboard/marketing/{{$user->username}}/edit" class="btn btn-warning">Edit</a> --}}
                <a href="/delete/driver/{{$driver->id}}" onclick="return confirm('Hapus Akun ?')" class="btn btn-danger">Hapus</a>
              </td>
              </tr>
                  @endforeach
              @endcan

              @can('superadmin')
              @foreach ($drivers as $driver)
              <tr>
              <td>{{$loop ->iteration}}</td>
              <td>{{$driver->name}}</td>
              <td>{{$driver->plat_mobil}}</td>
              {{-- <td>{{$user->email}}</td>
              <td>{{$user->team->nama_team}}</td> --}}
              <td>
                {{-- <a href="/dashboard/marketing/{{$user->username}}/edit" class="btn btn-warning">Edit</a> --}}
                <a href="/delete/driver/{{$driver->id}}" onclick="return confirm('Hapus Akun ?')" class="btn btn-danger">Hapus</a>
              </td>
              </tr>
                  @endforeach
                  @endcan
                </tbody>
              </table>
              <a href="/dashboard/driver/create" class="btn btn-primary mb-3" style="float: right">Tambah Driver</a>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  @endsection