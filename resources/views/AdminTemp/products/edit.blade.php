@extends('layout.template')

@section('titre')
  Edit product
@endsection

@section('titrepage')
 <h1>Edit product</h1>
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
left: 255px;
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
        <h3 class="card-title">Edit Product</h3>
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
    <form id="quickForm" method="post" action="{{route('products.update',$product->id)}}">
      @csrf
      @method('PUT')
        <div class="card-body">
        <div class="form-group">
          <label for="name"><b style="color: red">*</b>Name:</label>
          <input type="text" name="name" value="{{$product->name}}"class="form-control" id="name" placeholder="Enter product's name">
        </div>



          <div class="form-group">
            <label for="qte"><b style="color: red">*</b>Quantity in stock:</label>
            <input type="number" name="qte" value="{{$product->qte}}" class="form-control" id="qte" placeholder="Enter the Quantity">
          </div>

          <div class="form-group">
            <label for="pay"><b style="color: red">*</b>Price:</label>
            <input type="number" step="0.01" name="pay" value="{{$product->pay}}" class="form-control" id="pay" placeholder="Enter the Price">
          </div>

          <div class="form-group" >
            <label  for="image"><b style="color: red">*</b>Upload Picture:</label>
            <input type="file" name="image" id="image" value="{{asset('/image/product/'.$product->image)}}" class="inputfile"/>

        </div>

      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-outline-light" style="float: right">Edit</button>
      </div>
    </form>
  </div>


@endsection
