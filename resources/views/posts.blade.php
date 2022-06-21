@extends('layouts.main')

@section('container')

  <h2 class="mb-4 text-center">{{ $title }}</h2>

  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="/posts">

        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif

        @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
        @endif

        <div class="input-group mb-5">
          <input type="text" class="form-control" placeholder="search..." name="search" value="{{ request('search') }}">
          <button class="btn btn-primary" type="submit">Button</button>
        </div>
      </form>
    </div>
  </div>

  @if ($posts->count())

    <div class="card mb-3">

      <div class="position-absolute bg-dark text-white px-3 py-1 opacity-75 fs-4">
        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-white">
          {{ $posts[0]->category->name }}
        </a>
      </div>

      <img src="https://picsum.photos/1200/500" class="card-img-top" alt="{{ $posts[0]->category->name }}">

      <div class="card-body text-center">
        <h3 class="card-title">
          <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none">{{ $posts[0]->title }}</a>
        </h3>
        <small class="text-muted">
          By <a href="/posts?author={{ $posts[0]->user->username }}" class="text-decoration-none">
            {{ $posts[0]->user->username }} / {{ $posts[0]->user->name }}</a>
          in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
            {{ $posts[0]->category->name }}</a>
          {{ $posts[0]->created_at->diffForHumans() }}
        </small>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read more...</a>
      </div>
      
    </div>

    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
          <div class="col-md-4">

            <div class="card">
              <div class="position-absolute bg-dark text-white px-3 py-1 opacity-75">
                <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">
                  {{ $post->category->name }}
                </a>
              </div>
              <img src="https://picsum.photos/1200/800" class="card-img-top" alt="{{ $post->category->name }}">
              <div class="card-body">
                <h5 class="card-title">
                  <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
                </h5>
                <small>
                  By: 
                    <a href="/posts?author={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->username }} / {{ $post->user->name }}</a>
                  in
                    <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                </small>
                <p>{{ $post->excerpt }}</p>
                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more...</a>
              </div>
            </div>

          </div>
        @endforeach  
      </div>
    </div>

  @else
      <p class="text-center fs-3 text-danger">Post not found</p>
  @endif

  {{ $posts->links() }}

@endsection