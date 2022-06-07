@extends('layouts.main')

@section('container')
  <h1>ABOUT</h1>

  <h3> {{ $name }} </h3>
  <p> {{ $profession }} </p>
  <img src="img/{{ $image }}" alt="aing" width="200">
@endsection