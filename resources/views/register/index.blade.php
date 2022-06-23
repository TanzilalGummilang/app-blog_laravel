@extends('layouts.main')

@section('container')

<div class="row fs-6 justify-content-center fw-normal">
  <div class="col-lg-6">

    <main class="form-register w-100 m-auto">
      <form>

        <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>

        <div class="form-floating">
          <input type="text" name="username" class="form-control rounded-top" id="username" placeholder="Username">
          <label for="username">Username</label>
        </div>

        <div class="form-floating">
          <input type="text" name="name" class="form-control" id="name" placeholder="Name">
          <label for="name">Name</label>
        </div>

        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
          <label for="email">Email address</label>
        </div>

        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
          <label for="password">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Register</button>

      </form>

      <small class="d-block text-center mt-3">
        already registered? <a href="/login">login here</a>
      </small>
    </main>

  </div>
</div>

@endsection