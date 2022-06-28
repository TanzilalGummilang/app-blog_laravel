@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create Post</h1>
</div>

<div class="col-lg-8">
  <form action="/dashboard/posts" method="POST">
    @csrf

    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input name="title" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input name="slug" type="text" class="form-control" id="slug">
    </div>
    
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select class="form-select" name="category">
        @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <input id="body" type="hidden" name="body">
      <trix-editor input="body"></trix-editor>
    </div>

    <button type="submit" class="btn btn-primary">Create Post</button>

  </form>
</div>

<script src="/js/dashboard.posts.create.js"></script>

@endsection