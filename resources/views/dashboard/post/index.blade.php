@extends('dashboard.layouts.main')

@section('container')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Kelola Posingan</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Postingan</h5>

              @if(session()->has('success'))
              <div class="alert alert-success" role="alert">
                {{session('success')}}
              </div>
              @endif
               {{-- <code>.datatable</code> --}}

              <!-- Table with stripped rows -->
              <table class="table" id="data">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">tgl Buat</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
              <tr>
              <td>{{$loop ->iteration}}</td>
              <td>{{$post->created_at}}</td>
              <td>{{$post->title}}</td>
              <td>{{$post->category->name}}</td>
              <td>
                <a href="/dashboard/posts/{{$post->slug}}" class="badge bg-info"><i class="bi bi-eye"></i></a>
                <a href="/dashboard/posts/{{$post->slug}}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin?')"><i class="bi bi-trash3"></i></button>
                </form>
              </td>
              </tr>
              @endforeach
              </tbody>
              </table>
              <a href="/dashboard/posts/create" class="btn btn-primary mb-3" style="float: right; margin-top: 10px">Buat Postingan</a>

              

              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  @endsection