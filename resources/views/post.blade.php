@extends('layouts.main')

@section('container')

  <div class="singlePost fs-6 fw-normal">

    <article>
      <h2>{{ $post->title }}</h2>
      <h5>By: <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->username }} / {{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
      <p>{!! $post->body !!}</p>
    </article>

    <a href="/posts">Kembali ke Blog Posts</a>

  </div>

@endsection