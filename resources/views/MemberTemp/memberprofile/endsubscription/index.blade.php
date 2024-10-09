@extends('MemberTemp.layout.template')

@section('titre')
Ended subscriptions
@endsection

@section('titrepage')
<h1 >Your ended subscriptions</h1>

@endsection

@section('contenu')
<style>
#pic{
    vertical-align: middle;
    width: 80px;
    height: 90px;
     border-radius: 10%;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);

  }

  #bc {
        background-image: url('https://media.istockphoto.com/photos/abstract-blur-orange-and-yellow-color-tone-background-with-glowing-picture-id1060839456?k=20&m=1060839456&s=170667a&w=0&h=3Los9CDaoTVMNcpnVTni15Pbx_HWqpKWzNsQ0qvLmgk=');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
    #title{
        position: relative;
        left: 330px;
        text-transform: uppercase;
        color: firebrick
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
left: 300px;
text-transform: uppercase;
color: firebrick;
font: 700 4em/1 "Oswald", sans-serif;
}
</style>
<div class="card" id="bc">

    @if ($msg=Session::get('success'))
    <div class="alert alert-success">
        {{$msg}}
    </div>
    @endif

    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered">
            <thead>
                <tr  style="background-color: #ffeeba;" class="table-warning">
                    <th>Photo</th>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>sport</th>
                    <th>coach</th>
                    <th>Start of subscription</th>
                    <th>End of subscription</th>
                    <th>Paid amount</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($ends as $end)
                    @if($ends->members_id=$member->id)
                        <tr style="background-color: rgb(212, 14, 14)">
                        <td><img id="pic" width="100" height="50" src="{{asset('/image/member/'.$end->image)}}"
                            alt="lost it"> </td>
                        <td>{{$end->members->fname}} {{$end->members->lname}}</td>
                        <td>{{$end->members->gender}}</td>
                        <td>{{$end->sports->name}}</td>
                        @if ((int)$end->coaches_id)
                            <td>{{$end->coaches->fname}} {{$end->coaches->lname}}</td>
                        @else
                            <td><em>"No Coach"</em></td>
                        @endif
                        <td>{{$end->start}}</td>
                        <td>{{$end->end}}</td>
                        <td>{{$end->pay}} Dt</td>
                        </tr>
                    @endif
                @endforeach

            </tbody>

        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
