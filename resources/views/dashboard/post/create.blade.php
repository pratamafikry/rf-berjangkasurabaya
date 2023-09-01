@extends('dashboard.layouts.main')

@section('container')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Buat Postingan</h1>
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
              <h5 class="card-title">Buat Postingan</h5>
              <!-- Table with stripped rows -->
                <div class="col-lg-8">
                    <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                        <label for="title" class="form-label">Judul Postingan</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
                        @error('title')
                            <div class="invalid-feedback">
                              {{$message}}
                            </div>
                        @enderror
                        
                        </div>

                        <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{old('slug')}}">
                        @error('slug')
                            <div class="invalid-feedback">
                              {{$message}}
                            </div>
                        @enderror
                        </div>

                        <div class="mb-3">
                          <label for="category_id" class="form-label">Kategori</label>
                          <select class="form-select" name="category_id">
                            @foreach ($categories as $category)
                              @if(old('category_id') == $category->id)
                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                              @else
                                <option value="{{$category->id}}">{{$category->name}}</option>
                              @endif
                            @endforeach
                          </select>
                        </div>

                        <div class="mb-3">
                          <label for="image" class="form-label">Foto Postingan</label>
                          <img class="img-preview img-fluid mb-3 col-sm-5" id="img-preview">
                          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                          @error('image')
                            <div class="invalid-feedback">
                              {{$message}}
                            </div>
                        @enderror
                        </div>

                        <div class="mb-3">
                          <label for="body" class="form-label">Body Postingan</label>
                          
                          <input type="hidden" id="body" name="body" value="{{old('body')}}">
                          <trix-editor input="body"></trix-editor>
                          @error('body')
                              <p class="text-danger">{{$message}}</p>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>

              <!-- End Table with stripped rows -->

            </div>
          </div>
          
        </div>
      </div>
    </section>

    

  </main><!-- End #main -->
  <script>
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener("keyup", function() {
        let preslug = title.value;
        preslug = preslug.replace(/ /g,"-");
        slug.value = preslug.toLowerCase();
    });

    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    })
</script>

<script>
  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('#img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
  }
  
</script>
  

  @endsection