@extends('layouts.main')

@section('container')

  <h2>Post Category : {{ $category }}</h2>

  @foreach ($posts as $post)

    <article class="mb-4 mt-4 fs-6 fw-normal">
      <h2>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
      </h2>
      <h5>{{ $post->author }}</h5>
      <p>{!! $post->excerpt !!}</p>
    </article>

  @endforeach

@endsection