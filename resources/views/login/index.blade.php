@extends('layouts.main')

@section('container')

<div class="row fs-6 justify-content-center fw-normal">
  <div class="col-lg-6">

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <main class="form-login w-100 m-auto">
      <form action="/login" method="POST">
        @csrf

        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>

        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" value="password">
          <label for="password">Password</label>
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Login</button>
      </form>

      <small class="d-block text-center mt-3">
        not registered? <a href="/register">register here</a>
      </small>
    </main>

  </div>
</div>

@endsection