@extends('layouts.main')
@section('container')

  <h2 class="mb-4">Post Author</h2>

  @foreach ($authors as $author)

    <ul>
      <li>
        <h2>
          <a href="/posts?author={{ $author->username }}">{{ $author->username }} / {{ $author->name }}</a>
        </h2>
      </li>
    </ul>
      

  @endforeach

@endsection