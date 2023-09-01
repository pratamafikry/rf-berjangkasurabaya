@extends('layout.main')
@section('container')
<!-- about us -->
<section class="section-lg about pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Info Kegiatan</h2>
      </div>
      <div class="col-lg-12 mb-100">
        @if ($posts->count())
    <div class="card mb-3">
      @if ($posts[0]->image)
      <img src="{{ asset('storage/'.$posts[0]->image)}}" class="card-img-top" alt="{{$posts[0]->category->name}}" style="max-height: 400px; overflow:hidden;">
      @else
      <img src="https://source.unsplash.com/1200x400?{{$posts[0]->category->name}}" class="card-img-top" alt="{{$posts[0]->category->name}}">
      @endif
        
        <div class="card-body text-center">
          <h3 class="card-title"><a href="/news/{{ $posts[0]->slug }}" class="text-decoration-none">{{$posts[0]->title}}</a></h3>
          <p>
            <small class="text-muted">Author : <a href="/author/{{$posts[0]->author->username}}" class="text-decoration-none">{{ $posts[0]->author->name}}</a> in <a href="/categories/{{$posts[0]->category->slug}}" class="text-decoration-none">{{ $posts[0]-> category-> name }}</a> {{$posts[0]->created_at->diffForHumans()}}
            </small>
            </p>
          <p class="card-text">{{$posts[0]->excerpt}}</p>
          <a href="/news/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
        </div>
      </div>
    @else
      <p class="text-center fs-4">No Post Found.</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-2 py-1 text-white" style="background-color: rgba(0,0,0,0.7)"><a href="/categories/{{$post->category->slug}}" class="text-decoration-none text-white">{{$post->category->name}}</a></div>
                    @if ($post->image)
                    <img src="{{ asset('storage/'.$post->image)}}" class="card-img-top" alt="{{$post->category->name}}">
                    @else
                    <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                      <p>
                          <small class="text-muted">Author : <a href="/author/{{$post->author->username}}" class="text-decoration-none">{{ $post->author->name}}</a> {{$post->created_at->diffForHumans()}}
                        </small>
                    </p>
                    <p class="card-text">{{$post->excerpt}}</p>
                    <a href="/news/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                </div>
                  </div>
                </div>
                @endforeach
                
              </div>
            </div>
    </div>
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img src="/assets-index/images/background-shape/green-dot.png" alt="background-shape" class="about-bg-1 up-down-animation">
  <img src="/assets-index/images/background-shape/blue-dot.png" alt="background-shape" class="about-bg-2 left-right-animation">
  <img src="/assets-index/images/background-shape/green-half-cycle.png" alt="background-shape" class="about-bg-3 up-down-animation">
  <img src="/assets-index/images/background-shape/seo-ball-1.png" alt="background-shape" class="about-bg-4 left-right-animation">
  <img src="/assets-index/images/background-shape/team-bg-triangle.png" alt="background-shape" class="about-bg-5 up-down-animation">
  <img src="/assets-index/images/background-shape/service-half-cycle.png" alt="background-shape" class="about-bg-6 left-right-animation">
</section>
<!-- /about us -->
@endsection