@extends('MemberTemp.layout.template')

@section('titre')
Subscriptions
@endsection

@section('titrepage')
<h1 >Your Subscriptions</h1>
@endsection

@section('contenu')
<style>

#pic{
  vertical-align: middle;
  position: relative;
  width: 80px;
  height: 90px;
  border-radius: 10%;

}
#cy{
    background-color:rgb(249, 252, 118);
    font-weight:bold;
}
#end{
    color: rgb(114, 5, 5);
    font-weight: bold;
}

#prog{
    color: rgba(2, 44, 2, 0.541);
    font-weight: bold;
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
left: 370px;
text-transform: uppercase;
color: firebrick;
font: 700 4em/1 "Oswald", sans-serif;
}
</style>
<br>
    <div class="card" id="bc">

        @if ($msg=Session::get('success'))
        <div class="alert alert-success">
          {{$msg}}
        </div>
        @endif

        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-striped" >
            <thead >
            <tr class="table-warning">
                <th>Photo</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Sport</th>
                <th>Coach</th>
                <th>Start of Subscription</th>
                <th>End of Subscription</th>
                <th>Paid amount</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>

                @foreach ($modals as $key=>$modal)
                    @if ($modal->members_id==$member->id)
                        @if ($modal->status==1)
                            <tr style="background-color: rgb(6, 173, 42)">

                            <td><img id="pic" width="100" height="50" src="{{asset('/image/member/'.$modal->image)}}"
                                    alt="lost it"> </td>
                            <td>{{$modal->members->fname}} {{$modal->members->lname}}</td>
                            <td>{{$modal->members->gender}}</td>
                            <td>{{$modal->sports->name}}</td>
                            @if ((int)$modal->coaches_id)
                                <td id="cy">{{$modal->coaches->fname}} {{$modal->coaches->lname}}</td>
                            @else
                                <td style="background-color: rgb(3, 104, 28)"><em>"No Coach"</em></td>
                            @endif
                            <td>{{$modal->start}}</td>
                            <td>{{$modal->end}}</td>
                            <td>{{$modal->pay}} Dt</td>
                                <td id="prog">In Progress.<div>@include('AdminTemp.subscriptions.show')</div></td>
                            </tr>
                        @else
                            <tr  style="background-color: rgb(172, 23, 23)">

                            <td><img id="pic" width="100" height="50" src="{{asset('/image/member/'.$modal->image)}}"
                                    alt="lost it"> </td>
                            <td>{{$modal->members->fname}} {{$modal->members->lname}}</td>
                            <td>{{$modal->members->gender}}</td>
                            <td>{{$modal->sports->name}}</td>
                            @if ((int)$modal->coaches_id)
                                <td id="cy">{{$modal->coaches->fname}} {{$modal->coaches->lname}}</td>
                            @else
                                <td><em>"No Coach"</em></td>
                            @endif
                        @endif
                    @endif
                @endforeach



            </tbody>

          </table>
        </div>
        <!-- /.card-body -->
      </div>
    @endsection
