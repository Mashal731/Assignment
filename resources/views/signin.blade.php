@extends('layout')
@section('title', 'signin')
@section('navbar')
@parent
<div class="container">
  <h2>Registraion Form</h2>
  <form action="{{url('/submit')}}" Method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="uname">User Name:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter user name" name="uname">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection


