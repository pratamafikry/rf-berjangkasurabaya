@extends('layout.main')
@section('container')
<!-- about us -->
<section class="section-lg about pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      </div>
      <div class="col-lg-12 mb-100">
        <article>
        <div class="card mb-3">
          @if ($post->image)
          <div style="max-height: 350px; overflow:hidden;">
          <img src="{{ asset('storage/'.$post->image)}}" class="card-img-top" alt="{{$post->category->name}}">
        </div>
          @else
          <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
          @endif
            <div class="card-body text-center">
                <h3 class="card-title">{{$post->title}}</h3>
                <p>Author : <a href="/author/{{$post->author->username}}" class="text-decoration-none">{{ $post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{ $post-> category-> name }}</a></p>
                {!! $post -> body !!}
        </div>  
        </article>
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