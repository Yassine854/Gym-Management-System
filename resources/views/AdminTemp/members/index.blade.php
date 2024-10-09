
@extends('layout.template')

@section('titre')
Members List
@endsection

@section('titrepage')
<h1 id="title">Members List</h1>
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
left: 250px;
}

h1 {
position: relative;
left: 410px;
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
    <a href="{{route('members.create')}}" class="btn btn-outline-light" style="position:relative;left: 955px">Add member</a>
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
        <table id="example1" class="table table-striped">
            <thead>
                <tr style="background-color: #ffeeba;" class="table-warning">
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Member sheet</th>
                    <th>Subscription</th>
                    <th>Manage</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($members as $key=>$member)
                <tr>
                    <td>{{$member->fname}} {{$member->lname}}</td>

                    <td>{{$member->gender}}</td>
                    <td>{{$member->email}}</td>
                    <td>@include('AdminTemp.members.sheet')</td>
                    <td>@include('AdminTemp.members.modalmembers.create')</td>


                    {{-- <td> <//?php $date1 = date("Y-m-d", strtotime($member->start.'+'.($member->sub*30).'days')); echo $date1 ;?>
                    </td>
                    <td>{{$member->pay}}</td> --}}
                    <td>


                        <form method="post" action="{{route('members.destroy',$member->id)}}">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('members.edit',$member->id)}}">
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
@endsection

