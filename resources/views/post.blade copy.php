@extends('layout.main')

@section('container')
    <article>
        <h2>{{$post->title}}</h2>
        <p>Author : <a href="/author/{{$post->author->username}}" class="text-decoration-none">{{ $post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{ $post-> category-> name }}</a></p>
        {!! $post -> body !!}
    </article>

    <a href="/news"><i class="bi bi-arrow-left"></i> Kembali</a>
@endsection