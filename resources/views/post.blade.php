@extends('layouts.main')

@section('container')

  <div class="singlePost fs-6 fw-normal">

    <article>
      <h2>{{ $post->title }}</h2>
      <h5>By: {{ $post->user->name }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
      <p>{!! $post->body !!}</p>
    </article>

    <a href="/posts">Kembali ke Blog Posts</a>

  </div>

@endsection