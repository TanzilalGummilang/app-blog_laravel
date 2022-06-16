@extends('layouts.main')

@section('container')

  <h2>Post Author : {{ $author }}</h2>

  @foreach ($posts as $post)

    <article class="mb-4 mt-4 fs-6 fw-normal">
      <h2>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
      </h2>
      <h5>By: {{ $post->user->name }}</h5>
      <p>{!! $post->excerpt !!}</p>
    </article>

  @endforeach

@endsection

{{-- file ini blm kepake --}}