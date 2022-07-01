@extends('dashboard.layouts.main')

@section('container')

  <div class="container">
    <div class="row my-3">

      <div class="col-lg-10 mb-4">

        <a href="/dashboard/posts" class="btn btn-secondary btn-sm">
          <span data-feather="arrow-left"></span> Back to posts
        </a>

        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm">
          <span data-feather="edit"></span> Edit post
        </a>

        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
          @method('delete')
          @csrf

          <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this post?')">
            <span data-feather="x-circle"></span> Delete post
          </button>
        </form>

        <h1 class="text-center mt-4">{{ $post->title }}</h1>

        @if ($post->image)
          <div style="max-height: 500px; overflow: hidden;">
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
          </div>
        @else
          <img src="https://picsum.photos/1200/600" class="img-fluid mt-3" alt="{{ $post->category->name }}">
        @endif

        <article class="fs-6 my-3">
          <p>{!! $post->body !!}</p>
        </article>

        <a href="/dashboard/posts">Kembali ke My Posts</a>
      </div>

    </div>
  </div>

@endsection