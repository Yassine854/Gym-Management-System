@extends('layout.template')

@section('titre')
Sports List
@endsection

@section('titrepage')
<h1 id="title">Sports List</h1>
<hr>
@endsection

@section('contenu')
<style>
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
left: 230px;
}

h1 {
position: relative;
left: 402px;
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
    <a href="{{route('sports.create')}}" class="btn btn-outline-light" style="position:relative;left: 990px">Add sport</a>

</div>
<br>
    <div class="card" id="bc">
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
                <th>Name</th>
                <th>Total Hours</th>
                <th>Cost/Month</th>
                <th>Description</th>
                <th>Manage</th>


            </tr>
            </thead>
            <tbody>
                @foreach ($sports as $sport)
                <tr>
                    <td>{{$sport->name}}</td>
                    <td>{{$sport->hour}}</td>
                    <td>{{$sport->cost}} Dt</td>
                    <td>{{$sport->description}}</td>
                    <td>

                    <form method="post" action="{{route('sports.destroy',$sport->id)}}">
                        @csrf
                        @method('DELETE')
                       <a href="{{route('sports.edit',$sport->id)}}">
                        <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                        </a>
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
               </form>

            </tr>
            @endforeach

            </tbody>

          </table>
        </div>
        <!-- /.card-body -->
      </div>
    @endsection
