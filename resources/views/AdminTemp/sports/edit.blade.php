@extends('layout.template')

@section('titre')
  Edit Sport
@endsection

@section('titrepage')
 <h1>Edit Sport</h1>
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
<div class="card card-danger" style="background-color: rgb(250, 218, 181)">
    <div class="alert alert-secondary" style="background-color: #ed563b">
        <h3 class="card-title">Edit Sport</h3>
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
    <form id="quickForm" method="post" action="{{route('sports.update',$sport->id)}}">
      @csrf
      @method('PUT')
        <div class="card-body">
        <div class="form-group">
          <label for="name"><b style="color: red">*</b>Name:</label>
          <input type="text" name="name" value="{{$sport->name}}"class="form-control" id="name" placeholder="Enter Sport's name">
        </div>

          <div class="form-group">
            <label for="hour"><b style="color: red">*</b>Total Hours:</label>
            <input type="number" name="hour" value="{{$sport->hour}}" class="form-control" id="hour" placeholder="Enter the Total of hours">
          </div>

          <div class="form-group">
            <label for="cost"><b style="color: red">*</b>Cost/Month:</label>
            <input type="number" name="cost" value="{{$sport->cost}}" class="form-control" id="cost" placeholder="Enter the Cost per month">
          </div>

        <div class="form-group">
          <label for="description">Description:</label>
          {{-- <input type="text" name="description" class="form-control" id="description" placeholder="Entrer le description"> --}}
          <textarea name="description" id="description" value="{{$sport->description}}" class="form-control" cols="30" rows="3"> </textarea>
        </div>

      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-outline-light" style="float: right">Edit</button>
      </div>
    </form>
  </div>


@endsection
