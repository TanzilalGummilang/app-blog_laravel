@extends('layouts.main')

@section('container')

  <h2 class="mb-4">Blog Posts</h2>

  @foreach ($posts as $post)

    <article class="mt-3 fs-6 fw-normal border-bottom">
      <h2>
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
      </h2>
      <h5>By: <a href="/authors/{{ $post->user->username }}">{{ $post->user->username }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
      <p>{!! $post->excerpt !!} <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a></p>
    </article>

  @endforeach

@endsection