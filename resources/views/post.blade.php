@extends('layouts.main')

@section('container')

  <div class="container">
    <div class="row justify-content-center fs-5 fw-normal">

      <div class="col-md-10 mb-5">
        <h2>{{ $post->title }}</h2>
        <h5 class="mb-3 fs-6">
          By <a href="/posts?author={{ $post->user->username }}" class="text-decoration-none">
            {{ $post->user->username }} / {{ $post->user->name }}</a>
          in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
            {{ $post->category->name }}</a>
        </h5>

        @if ($post->image)
          <div style="max-height: 500px; overflow: hidden;">
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
          </div>
        @else
          <img src="https://picsum.photos/1200/500" class="img-fluid" alt="{{ $post->category->name }}">
        @endif

        <article class="fs-5 fw-normal">
          <p>{!! $post->body !!}</p>
        </article>

        <a href="/posts">Kembali ke Blog Posts</a>
      </div>

    </div>
  </div>

    

@endsection