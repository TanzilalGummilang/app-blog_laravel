@extends('dashboard.layouts.main')

@section('container')

  <div class="container">
    <div class="row my-3">

      <div class="col-lg-8">

        <a href="/dashboard/posts" class="btn btn-secondary btn-sm">
          <span data-feather="arrow-left"></span> Back to posts
        </a>
        <a href="" class="btn btn-warning btn-sm">
          <span data-feather="edit"></span> Edit post
        </a>
        <a href="" class="btn btn-danger btn-sm">
          <span data-feather="x-circle"></span> Delete post
        </a>

        <h1 class="text-center mt-4">{{ $post->title }}</h1>

        <img src="https://picsum.photos/1200/600" class="card-img-top mt-3" alt="{{ $post->category->name }}">

        <article class="fs-6 my-3">
          <p>{!! $post->body !!}</p>
        </article>

        <a href="/posts">Kembali ke Blog Posts</a>
      </div>

    </div>
  </div>

@endsection