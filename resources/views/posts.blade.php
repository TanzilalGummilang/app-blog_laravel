@extends('layouts.main')

@section('container')

  @foreach ($posts as $post)

    <article class="mb-4">
      <h2>
        <a href="/post/{{ $post['slug'] }}">{{ $post['title'] }}</a>
      </h2>
      <h5>By: {{ $post['author'] }}</h5>
      <p class="fs-6 fw-normal">{{ $post['body'] }}</p>
    </article>

  @endforeach

@endsection