@extends('layouts.main')
@section('container')

  <h2 class="mb-4">Post Category</h2>

  
  <div class="container">
    <div class="row">
      @foreach ($categories as $category)
        <div class="col-md-4">

          <a href="/posts?category={{ $category->slug }}">
            <div class="card bg-dark text-white">
              <img src="https://picsum.photos/1200/800" class="card-img" alt="{{ $category->name }}">
              <div class="card-img-overlay">
                <h5 class="card-title bg-dark text-white opacity-75 position-absolute px-3 py-1">{{ $category->name }}</h5>
              </div>
            </div>
          </a>

        </div>
      @endforeach
    </div>
  </div>

@endsection