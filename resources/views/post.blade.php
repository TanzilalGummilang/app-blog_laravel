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

        <img src="https://picsum.photos/1200/600" class="card-img-top" alt="{{ $post->category->name }}">

        <article class="fs-5 fw-normal">
          <p>{!! $post->body !!}</p>
        </article>

        <a href="/posts">Kembali ke Blog Posts</a>
      </div>

    </div>
  </div>

    

@endsection