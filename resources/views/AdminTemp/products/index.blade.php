@extends('layout.template')

@section('titre')
Products List
@endsection

@section('titrepage')
<h1 id="title">Products List</h1>
<hr>
@endsection

@section('contenu')

<style>
    #pic {
        vertical-align: middle;
        width: 90px;
        height: 90px;
        border-radius: 10%;
        position: relative;
        left: 30px;
    }
    #bc {
        background-image: url('https://media.istockphoto.com/photos/abstract-blur-orange-and-yellow-color-tone-background-with-glowing-picture-id1060839456?k=20&m=1060839456&s=170667a&w=0&h=3Los9CDaoTVMNcpnVTni15Pbx_HWqpKWzNsQ0qvLmgk=');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
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
left: 405px;
text-transform: uppercase;
color: firebrick;
font: 700 4em/1 "Oswald", sans-serif;
}
.btn-outline-light,.btn-outline-light:visited
    .btn-outline-light:active {
        color: #ed563b;
        border-color: #ed563b;
    }

    .btn-outline-light:hover

     {
        background-color: #ed563b;
        color: black;
        border-color: black;
    }
</style>

<div class="pull-right">
    <a href="{{route('products.create')}}" class="btn btn-outline-light"  style="position:relative;left: 960px">Add product</a>
</div>
<br>
<div class="card"id="bc">
    @if ($msg=Session::get('warning'))
        <div class="alert alert-warning">
          {{$msg}}
        </div>
        @endif

    @if ($msg=Session::get('success'))
    <div class="alert alert-success">
        {{$msg}}
    </div>
    @endif

    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr style="background-color: #ffeeba;" class="table-warning">
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Quantity in stock</th>
                    <th>Price</th>
                    <th>Sale</th>
                    <th>Manage</th>




</tr>
</thead>
<tbody>
@foreach ($products as $key=>$product)
<tr>
<td><img id="pic" width="100" height="50" src="{{asset('/image/product/'.$product->image)}}"
alt="lost it"> </td>
<td>{{$product->name}}</td>
<td>{{$product->qte}}</td>
<td>{{$product->pay}} Dt</td>

<td>



@if($product->qte==0)
<!-- Small modal -->



<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger" data-toggle="modal"
data-target="#exampleModal{{$key}}">
Oops!
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$key}}" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header" style="background-color: rgba(231, 37, 37, 0.658)">
            <h5 class="modal-title" id="exampleModalLabel">Sorry...</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" style="background-color: rgba(250, 107, 50, 0.192)">
            Seems like you just ran out of stock...
            <p> Please make sure to fill up your stock again as soon as possible. </p>
        </div>
        <div class="modal-footer" style="background-color: rgba(250, 107, 50, 0.192)">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>
@else

<button type="button" class="btn btn-outline-success"  data-toggle="modal"
data-target=".bd-example-modal-sm{{$key}}">Sell</button>


<div class="modal fade bd-example-modal-sm{{$key}}" tabindex="-1" role="dialog"
aria-labelledby="mySmallModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm">
    <div class="modal-content">
        <form method="post" action="{{route('products.update',$product)}}">
            @method('PUT')
            @csrf
            <div class="modal-header"style="background-color: #2ECC71">
                <h5 class="modal-title" id="exampleModalLabel" >Sale</h5>
                <button type="button" class="close" data-dismiss="modal">x</button>
            </div>
            <div class="card-body" style="background-color: rgba(50, 250, 77, 0.192)">
                <div class="form-group">
                    <label>Name:</label>
                    <p style="color: firebrick"> <u><b> {{$product->name}} </b> </u></p>
                    <input id="fin" type="hidden" value={{$product->pay}}>
                </div>

                <div class="form-group">
                    <label for="val">Quantity:</label>
                    <input type="number" id="val{{$key+1}}" name="qte_pay" value=1 min=1
                        max={{$product->qte}} class="form-control"  required>
                </div>

                <!-- Button trigger modal -->


                <button type="button" onclick="myCost({{$product->pay}},{{$key+1}})" class="btn btn-success"
                    data-toggle="modal" data-target="#exampleModal{{$key}}"
                    style="float:right">
                    Sell
                </button>

                <!-- Modal -->
                <div class="modal fade bd-example-modal-sm" id="exampleModal{{$key}}" tabindex="-1"
                    role="dialog" aria-labelledby="exampleModalLabel{{$key}} "
                    aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document" >
                        <div class="modal-content" style="width: 400px;position:relative;right:50px;top:20px;">
                            <div class="modal-header" style="background-color: rgb(255, 255, 32)">
                                <h5 class="modal-title" id="exampleModalLabel{{$key}}">Cost
                                </h5>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>


                            <div class="modal-body" style="background-color: rgba(255, 255, 0, 0.568)">



                                <input type="hidden" name="selling" value="yes">
                                <div class="card-body">
                                    <div class="form-group">
                                        This will cost <b id="what{{$key+1}}"></b><b>Dt.</b>
                                        <p>Continue ?</p>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger"
                                        data-dismiss="modal">No</button>

                                    <button type="submit"
                                        class="btn btn-success">Yes</button>

                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- <button type="submit" class="btn btn-success" >Sell</button> --}}
                </div>
        </form>
    </div>
</div>
</div>
@endif

</td>
<td>


<form method="post" action="{{route('products.destroy',$product->id)}}">
@csrf
@method('DELETE')
<a href="{{route('products.edit',$product->id)}}">
    <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
</a>
<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
</td>
</form>

</tr>
@endforeach
</tbody>

        </table>
    </div>
    <!-- /.card-body -->
</div>


<script type="text/javascript">
    function myCost(a,b) {
var x =document.getElementById("val"+b).value;
document.getElementById("what"+b).innerHTML = x*a;

}
</script>
@endsection
