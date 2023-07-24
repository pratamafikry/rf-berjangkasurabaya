@extends('dashboard.layouts.main')

@section('container')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Appointment Driver</h1>
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
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Sesi</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nama Karyawan</th>
                    <th scope="col">Team</th>
                    <th scope="col">Aksi</th>
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
                    <td><a href="/dashboard/appointment/{{$appointment->slug}}/edit" class="btn btn-info">Pick Up</span></a></td>
                    {{-- <td><a href="/dashboard/appointment/{{$appointment->slug}}/edit" class="btn btn-warning">Edit</span></a></td> --}}
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{-- <a href="/dashboard/driver/create" class="btn btn-primary mb-3" style="float: right">Tambah Driver</a> --}}
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  @endsection