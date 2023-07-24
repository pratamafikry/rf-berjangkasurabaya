@extends('dashboard.layouts.main')

@section('container')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Kelola Akun</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Akun</h5>
               {{-- <code>.datatable</code> --}}

              <!-- Table with stripped rows -->
              <table class="table" id="data">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    {{-- <th scope="col">Email</th> --}}
                    <th scope="col">Team</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @can('user')
                    @foreach ($users as $user)
                  <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->username}}</td>
                    {{-- <td>{{$user->email}}</td> --}}
                    <td>{{$user->team->nama_team}}</td>
                    <td><a href="/delete/{{$user->id}}" onclick="return confirm('Hapus Akun?')" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  @endforeach
                  @endcan

                  @can('admin')
                    @foreach ($users as $user)
                  <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->username}}</td>
                    {{-- <td>{{$user->email}}</td> --}}
                    <td>{{$user->team->nama_team}}</td>
                    <td><a href="/delete/{{$user->id}}" onclick="return confirm('Hapus Akun?')" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  @endforeach
                  @endcan

                  @can('superadmin')
                  @foreach ($useradmin as $user)
                  <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->username}}</td>
                    {{-- <td>{{$user->email}}</td> --}}
                    <td>{{$user->team->nama_team}}</td>
                    <td><a href="/delete/{{$user->id}}" onclick="return confirm('Hapus Akun?')" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  @endforeach
                  @endcan
                </tbody>
              </table>
              <a href="/register" class="btn btn-primary mb-3 mt-2" style="float: right">Buat Akun Baru</a>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  @endsection