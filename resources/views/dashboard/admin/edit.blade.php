@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Rubah Password{{$user->nama}}</h1>
</div>

<div class="row justify-content-md-center">
<div class="col-lg-3">
  <form method="post" action="/dashboard/marketing/{{$user->username}}">
    @method('put')
    @csrf
      <div class="mb-3">
        <label for="tgl_buat" class="form-label">Rubah Password</label>
        <input type="text" class="form-control" id="tgl_buat" aria-describedby="id" name="password" placeholder="Masukkan Password Baru...">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection