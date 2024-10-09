@extends('layout.template')

@section('titre')
  Add Admin
@endsection

@section('titrepage')
<h1> Add Admin </h1>
 <hr>
@endsection

@section('contenu')
<style>
    hr {

border: none;
height: 3px;
width: 300px;
background: firebrick;
position: relative;
left: 250px;
}

h1 {
position: relative;
left: 430px;
text-transform: uppercase;
color: firebrick;
font: 700 4em/1 "Oswald", sans-serif;
}
.btn-outline-primary,
.btn-outline-primary:active,
.btn-outline-primary:visited,
.btn-primary:focus {
    color: #ed563b;
    border-color: #ed563b;
}
.btn-outline-primary:hover{
    background-color: #ed563b;
    border-color: #ed563b;
}
</style>
@if ($msg=Session::get('warning'))
    <div class="alert alert-warning">
        {{$msg}}
    </div>
    @endif
<div class="card card-danger" style="background-color: rgb(250, 218, 181)">
    <div class="alert alert-secondary" style="background-color: #ed563b">
        <h3 class="card-title">Add Admin</h3>
    </div>
    <!-- /.card-header -->


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
    @foreach ($errors->all() as $error)
       <li> {{$error}}</li>
    @endforeach
        </ul>
    </div>
    @endif
    <!-- form start -->
    <form id="quickForm" method="post" action="{{route('users.store')}}">
      @csrf
        <div class="card-body">
        <div class="form-group">
          <label for="name"><b style="color: red">*</b>Name:</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Enter Admin's name">
        </div>

        <div class="form-group">
            <label for="email"><b style="color: red">*</b>E-mail Address:</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter Admin's Email">
        </div>

        <div class="form-group">
            <label for="password"><b style="color: red">*</b>Password:</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Admin's password">
        </div>

      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-outline-primary" style="float: right">Add</button>
      </div>
    </form>
  </div>

@endsection
