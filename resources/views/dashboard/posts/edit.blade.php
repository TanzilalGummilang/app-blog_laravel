@extends('dashboard.layouts.main')

@section('container')

<div class="mb-5">

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
  </div>

  <div class="col-lg-8">
    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
      @method('put')
      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title', $post->title) }}" autofocus>
        @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{ old('slug', $post->slug) }}">
        @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      
      <div class="mb-3">
        <label for="category_id" class="form-label">Category</label>
        <select class="form-select" name="category_id">
          @foreach ($categories as $category)
            @if (old('category_id', $post->category_id) == $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="image" class="form-label @error('image') is-invalid @enderror">Post Image</label>
        <input type="hidden" name="oldImage" value="{{ $post->image }}">
        @if ($post->image)
          <img src="{{ asset('storage/' . $post->image) }}" class="imgPreview img-fluid mb-2 col-sm-12">
        @else
          <img class="imgPreview img-fluid mb-2 col-sm-12">
        @endif
        <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
        @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
        <trix-editor input="body"></trix-editor>
        @error('body')
          <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary">Update Post</button>
      <a href="/dashboard/posts" class="btn btn-secondary">Cancel</a>

    </form>

  </div>

</div>

@endsection