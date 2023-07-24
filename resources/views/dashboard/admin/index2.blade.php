@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kelola Akun</h1>
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{session('success')}}
  </div>
  @endif

  <div class="table-responsive">
    <a href="/register" class="btn btn-primary mb-3" style="float: right">Buat Akun Baru</a>
    <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Team</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            @foreach ($users as $user)
            <tr>
              <td>{{$loop ->iteration}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->username}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->team->nama_team}}</td>
              <td>
                {{-- <a href="/dashboard/marketing/{{$user->username}}/edit" class="btn btn-warning">Edit</a> --}}
                <a href="/delete/{{$user->id}}" onclick="return confirm('Hapus Akun ?')" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection