@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Driver Baru</h1>
</div>

<div class="row justify-content-md-center">
<div class="col-lg-3">
    <form method="post" action="/dashboard/driver">
      @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" aria-describedby="id" name="name" placeholder="Masukkan nama driver..">
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Plat Nomor Mobil</label>
            <input type="text" class="form-control" id="plat_mobil" aria-describedby="id" name="plat_mobil" placeholder="Masukkan plat nomor mobil..">
          </div>
        {{-- <div class="mb-3">
            <input type="hidden" class="form-control" id="slug" aria-describedby="id" name="slug" value="" readonly>
          </div> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>

{{-- <script>
  const nama = document.querySelector('#nama_client');
  const slug = document.querySelector('#slug');

  nama.addEventListener('change', function(){
    fetch('/dashboard/appointment/checkSlug?nama_client=' + nama_client.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });
</script> --}}
@endsection
{{-- <script>
  function clickAction(){

    sesi.textContent = 'Masukkan Jam Temu..';
    if (jam_temu.value >  '13.00'){
      sesi.textContent = "Sesi 1";
    }
  }
  cekButton.onclick = clickAction;
</script> --}}