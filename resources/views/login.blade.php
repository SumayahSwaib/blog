@extends('layouts.pageslayout')
@section('title', 'login or create account')
@section( 'content')
<hr>
<div class="row">
    <div class="col-md-6">
      <h2 class="text-center">Register</h2>
      <form action="{{route('login') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="Name:"></label>
          <input requred  value="{{ old('name') }}" class="form-control" type="name" name="name" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="Email:"></label>
          <input requred value="{{ old('email') }}" class="form-control" type="email" name="email" placeholder="Email">
          <p class="small text-danger">{{$errors->first('email') }}</p>

        </div>

        <div class="form-group">
          <label for="Password:"></label>
          <input requred class="form-control" type="password" name="password" placeholder="Enter password">
        <p class="small text-danger">{{$errors->first('password') }}</p>
  
        </div>
      <div class="form-group">
          <label for="Confirm Password:"></label>
          <input requred class="form-control" type="password" name="password1" placeholder="confirm password">
        </div>
        <button type="submit" class="btn btn-danger">REGESTER</button>
      </form>
    </div>
{{--     login form --}}  
  <div class="col-md-6">
        <h2 class="text-center">Login</h2>
        <form action="{{route('login') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="Email:"></label>
            <input requred value="{{ old('login_email') }}" class="form-control" type="email" name="login_email" placeholder="Email">
            <p class="small text-danger">{{$errors->first('login_email') }}</p>
          </div>

          <div class="form-group">
            <label for="Password:"></label>
            <input requred class="form-control" type="password" name="login_password" placeholder="Enter password">
          </div>
          
          <button type="submit" class="btn btn-danger">login</button>
        </form>
      </div>


@endsection