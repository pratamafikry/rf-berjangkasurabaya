@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Rubah Appointment</h1>
</div>

<div class="row justify-content-md-center">
<div class="col-lg-3">
    <form method="post" action="/dashboard/appointment/{{$app->slug}}">
      @method('put')
      @csrf
        <div class="mb-1">
          <label for="tgl_buat" class="form-label">Tanggal Order</label>
          <input type="text" class="form-control" id="tgl_buat" aria-describedby="id" name="tgl_buat" value="{{$app->tgl_buat}}" readonly>
        </div>

        

        <div class="mb-1">
          <label for="tgl_temu" class="form-label">Tanggal Appointment</label>
          <input type="text" class="form-control" id="tgl_temu" name="tgl_temu" value="{{$app->tgl_temu}}" readonly>
        </div>

        <div class="mb-1">
            <label for="jam" class="form-label">Jam Appointment</label>
            <input type="text" class="form-control" id="jam" aria-describedby="id" name="jam" value="{{$app->jam}}" readonly>
            <input type="hidden" class="form-control" id="sesi_id" aria-describedby="id" name="sesi_id" value="{{$app->sesi_id}}" readonly>
            {{-- <button id="cekButton">Cek Sesi</button> --}}
        </div>

        <div class="mb-1">
            <label for="sesi" class="form-label">Sesi</label>
            <input type="text" class="form-control" id="sesi" aria-describedby="id" name="sesi" value="{{$app->sesi}}" readonly>
        </div>

        <div class="mb-1">
            <label for="nama" class="form-label">Nama Karyawan</label>
            <input type="text" class="form-control" id="nama" aria-describedby="id" name="nama" value="{{$app->nama}}" readonly>
          </div>

        <div class="mb-1">
            <input type="hidden" class="form-control" id="slug" aria-describedby="id" name="slug" value="{{$app->slug}}" readonly>
          </div>

          <div class="mb-1">
            <label for="team" class="form-label">Team</label>
            <input type="text" class="form-control" id="team" aria-describedby="id" name="team" value="{{$app->team}}" readonly>
          </div>

          <div class="mb-1">
            <label for="manager" class="form-label">Manager</label>
            <input type="text" class="form-control @error('manager') is-invalid @enderror" id="manager" aria-describedby="id" name="manager" value="{{$app->manager}}" readonly>
            @error('manager')
              <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-1">
            <label for="pendamping" class="form-label">Pendamping</label>
            <input type="text" class="form-control @error('pendamping') is-invalid @enderror" id="pendamping" aria-describedby="id" name="pendamping" value="{{$app->pendamping}}" readonly>
            @error('pendamping')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-1">
            <label for="nama_client" class="form-label">Nama Client</label>
            <input type="text" class="form-control @error('nama_client') is-invalid @enderror" id="nama_client" aria-describedby="id" name="nama_client" value="{{$app->nama_client}}" readonly>
            @error('nama_client')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-1">
            <label for="client" class="form-label">Status Nasabah</label>
            <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" aria-describedby="id" name="status" value="{{$app->status}}" readonly>

          </div>
          <div class="mb-1">
            <label for="client" class="form-label">Tujuan Appointment</label>
            <input type="text" class="form-control @error('tujuan') is-invalid @enderror" id="tujuan" aria-describedby="id" name="tujuan" value="{{$app->tujuan}}" readonly>
        
          </div>
          <div class="mb-1">
            <label for="alamat" class="form-label">Alamat Appointment</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" aria-describedby="id" name="alamat" value="{{$app->alamat}}" readonly>
            
          </div>
          <div class="mb-1">
            <label for="kendaraan" class="form-label">Kendaraan</label>
            <input type="text" class="form-control @error('kendaraan') is-invalid @enderror" id="kendaraan" aria-describedby="id" name="kendaraan" value="{{$app->kendaraan}}" readonly>
            
          </div>
          <div class="mb-1">
            <label for="kendaraan" class="form-label">Driver</label>
            <select class="form-select" name="driver_id" aria-label="Default select example">
                <option selected>Pilih driver</option>
                @foreach ($drivers as $driver)
                <option value="{{$driver->id}}">{{$driver->name}} ({{$driver->plat_mobil}})</option>
                @endforeach
              </select>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>

<script>
  const nama = document.querySelector('#nama_client');
  const slug = document.querySelector('#slug');

  nama.addEventListener('change', function(){
    fetch('/dashboard/appointment/checkSlug?nama_client=' + nama_client.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
      
  });
</script>
@endsection
