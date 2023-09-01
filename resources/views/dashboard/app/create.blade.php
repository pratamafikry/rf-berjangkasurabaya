@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Buat Appointment Baru</h1>
</div>

<div class="row justify-content-md-center">
<div class="col-lg-3">
    <form method="post" action="/dashboard/appointment">
      @csrf
        <div class="mb-3">
          <label for="tgl_buat" class="form-label">Tanggal Order</label>
          <input type="text" class="form-control" id="tgl_buat" aria-describedby="id" name="tgl_buat" value="{{Carbon\Carbon::now('+7')}}" readonly>
        </div>
        <div class="mb-3">
          <label for="tgl_temu" class="form-label">Tanggal Appointment</label>
          <input type="date" class="form-control" id="tgl_temu" name="tgl_temu">
        </div>
        <div class="mb-3">
            <label for="jam" class="form-label">Jam Appointment</label>
            <select class="form-select" name="sesi_id" aria-label="Default select example" id="sesi_id">
              <option selected>Pilih Jam Appointment</option>
              @foreach($sesis as $sesi)
              <option value="{{$sesi->id}}">{{$sesi->jam_sesi}}</option>
              @endforeach
              
            </select>
            <input type="hidden" class="form-control" id="jam" aria-describedby="id" name="jam" value="" readonly>
        </div>



        <div class="mb-3">
            <label for="sesi" class="form-label">Sesi</label>
            <input type="text" class="form-control" id="sesi" aria-describedby="id" name="sesi" value="" readonly>
 

        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" aria-describedby="id" name="nama" value="{{auth()->user()->name}}" readonly>
          </div>
        <div class="mb-3">
            <input type="hidden" class="form-control" id="slug" aria-describedby="id" name="slug" value="" readonly>
          </div>

          
          <div class="mb-3">
            <label for="team" class="form-label">Team</label>
            <input type="text" class="form-control" id="team" aria-describedby="id" name="team" value="{{auth()->user()->team->nama_team}}" readonly>
          </div>

          <div class="mb-3">
            <input type="hidden" class="form-control" id="divisi_id" aria-describedby="id" name="divisi_id" value="{{auth()->user()->divisi_id}}" readonly>
          </div>

          <div class="mb-3">
            <label for="manager" class="form-label">Manager</label>
            <input type="text" class="form-control @error('manager') is-invalid @enderror" id="manager" aria-describedby="id" name="manager" value="{{auth()->user()->team->manager}}" readonly>
            @error('manager')
              <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="pendamping" class="form-label">Pendamping</label>
            <input type="text" class="form-control @error('pendamping') is-invalid @enderror" id="pendamping" aria-describedby="id" name="pendamping" placeholder="Isi nama pendamping anda...">
            @error('pendamping')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="nama_client" class="form-label">Nama Client</label>
            <input type="text" class="form-control @error('nama_client') is-invalid @enderror" id="nama_client" aria-describedby="id" name="nama_client" placeholder="Isi nama client anda...">
            @error('nama_client')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="client" class="form-label">Status Nasabah</label>
            <select class="form-select" name="status" aria-label="Default select example">
                <option selected>Pilih status nasabah anda..</option>
                <option>Calon Nasabah</option>
                <option>Nasabah</option>
              </select>
          </div>
          <div class="mb-3">
            <label for="client" class="form-label">Tujuan Appointment</label>
            <select class="form-select" name="tujuan" aria-label="Default select example">
                <option selected>Pilih tujuan appointment..</option>
                <option>New</option>
                <option>Follow Up</option>
                <option>Ambil Dana</option>
                <option>Luar Kota</option>
              </select>
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Appointment</label>
            <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="3" name="alamat" placeholder="Masukkan alamat appointment lengkap..."></textarea>
            @error('alamat')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="kendaraan" class="form-label">Kendaraan</label>
            <select class="form-select" name="kendaraan" aria-label="Default select example">
                <option selected>Pilih kendaraan yang digunakan</option>
                <option>Pribadi</option>
                <option>Kantor</option>
              </select>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>



<script src="/assets/js/jquery-3.7.0.min.js"></script>
<script>
    $(document).ready(function(){
      $('#sesi_id').on('change',function(){
        var sesi_id = $(this).val();
          // console.log(sesi_id);
        if (sesi_id) {
          $.ajax({
            url:'/sesi/' + sesi_id,
            type: 'GET',
            data: {
              '_token' : '{{csrf_token()}}'
            },
            dataType:'json',
            success: function(data)
            {
              $('#sesi').val(data.nama_sesi);
              $('#jam').val(data.jam_sesi);
              
            }

          })
        }
      })
    });
</script>

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
