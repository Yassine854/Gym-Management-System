@extends('layout.template')

@section('titre')
  Edit Admin
@endsection

@section('titrepage')
<h1>Edit Infos</h1>
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
left: 225px;
}

h1 {
position: relative;
left: 410px;
text-transform: uppercase;
color: firebrick;
font: 700 4em/1 "Oswald", sans-serif;
}
.btn-outline-light,
    .btn-outline-light:visited,
    .btn-outline-light:active {
        color: #ed563b;
        border-color: #ed563b;
    }

    .btn-outline-light:hover {
        background-color: #ed563b;
        border-color: #ed563b;
    }
</style>
<?PHP $user=Auth::user();?>
@if ($msg=Session::get('success'))
    <div class="alert alert-success">
        {{$msg}}
    </div>
    @endif
    @if ($msg=Session::get('warning'))
    <div class="alert alert-warning">
        {{$msg}}
    </div>
    @endif
<div class="card card-danger" style="background-color: rgb(250, 218, 181)">
    <div class="alert alert-secondary" style="background-color: #ed563b">
        <h3 class="card-title">Edit Infos</h3>
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
    <form id="quickForm" method="post" action="{{route('users.update',$user->id)}}">
         @method('PUT')
      @csrf
        <div class="card-body">
        <div class="form-group">
          <label for="name"><b style="color: red">*</b>Name:</label>
          <input type="text" name="name" value="{{$user->name}}" class="form-control" id="name" placeholder="Enter Admin's name">
        </div>

        <div class="form-group">
            <label for="email"><b style="color: red">*</b>E-mail editress:</label>
            <input type="email" name="email" value="{{$user->email}}" class="form-control" id="email" placeholder="Enter the Email">
        </div>

        <div class="form-group">
            <label for="password"><b style="color: red">*</b>Password:</label>
            <input type="text" name="password" class="form-control" id="password" placeholder="Enter the new password">
        </div>


      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-outline-light" style="float: right">Edit</button>
      </div>
    </form>
  </div>


@endsection
