@extends('layouts.layout')
@section('content')
<div class="container custom">
    <div class="row">
        <div class="col-sm-9 col-sm-offset-6">
    <form action='login' method='post'>
    <div class="row mb-3">
    @csrf
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name='email'>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name='password'>
    </div>
  </div>
  <button type="submit" class="btn btn-primary ml-5">Login</button>
</form>
        </div>
    </div>
</div>
@endsection