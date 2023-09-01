@extends('dashboard.layouts.main')

@section('container')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Postingan</h1>
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
              <h5 class="card-title">Data Postingan</h5>
               {{-- <code>.datatable</code> --}}
               <article>
                <h2>{{$post->title}}</h2>
                <p>Author : <a href="/author/{{$post->author->username}}" class="text-decoration-none">{{ $post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{ $post-> category-> name }}</a>
                  @if ($post->image)
                  <div style="max-height: 350px; overflow:hidden;">
                  <img src="{{ asset('storage/'.$post->image)}}" class="card-img-top" alt="{{$post->category->name}}">
                </div>
                  @else
                  <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
                  @endif
                
                </p>
                  {!! $post -> body !!}
            </article>
            <a href="/dashboard/posts" class="btn btn-info" style="margin-top: 20px"><span class="bi bi-arrow-left"></span> Kembali ke daftar postingan</a>
            <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning" style="margin-top: 20px"> <span class="bi bi-pencil"></span> Edit Postingan</a>
            <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')" style="margin-top: 20px"><span class="bi bi-trash3"></span> Hapus Postingan</button>
            </form>

              <!-- Table with stripped rows -->
              

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  @endsection