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

    <main class="form-login w-100 m-auto">
      <form>
        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>

      <small class="d-block text-center mt-3">
        not registered? <a href="/register">register here</a>
      </small>
    </main>

  </div>
</div>

@endsection