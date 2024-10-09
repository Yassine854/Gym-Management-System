@extends('layout.template')

@section('titre')
Current subscriptions
@endsection

@section('titrepage')
<h1 >Current subscriptions</h1>

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
left: 230px;
}

h1 {
position: relative;
left: 320px;
text-transform: uppercase;
color: firebrick;
font: 700 4em/1 "Oswald", sans-serif;
}

</style>
<div class="card">

    @if ($msg=Session::get('success'))
    <div class="alert alert-success">
        {{$msg}}
    </div>
    @endif

    @if ($msg=Session::get('danger'))
    <div class="alert alert-danger">
        {{$msg}}
    </div>
    @endif

    <!-- /.card-header -->
    <div class="card-body" id="bc">
        <table id="example1" class="table table-bordered">
            <thead >
                <tr style="background-color: #ffeeba;" class="table-warning">
                    <th>Photo</th>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>sport</th>
                    <th>coach</th>
                    <th>Start of subscription</th>
                    <th>End of subscription</th>
                    <th>Paid amount</th>
                    <th>Status</th>
                    {{-- <th>Remove subscription</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($modals as $key=>$modal)
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
                     <td> {{-- $date1 = date("Y-m-d H:i:s", strtotime($modal->created_at.'+'.($modal->sub*30).'days')); echo $date1 ; --}} {{$modal->end}}</td>
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
                <td>{{$modal->start}}</td>
                    <td> {{-- $date1 = date("Y-m-d H:i:s", strtotime($modal->created_at.'+'.($modal->sub*30).'days')); echo $date1 ; --}} {{$modal->end}}</td>
                <td >{{$modal->pay}} Dt</td>
                    <td id="end">Ended.
                        <div>


                        <!-- Button trigger modal -->
                        <button style="background-color: darkred" type="button" class="btn btn-dark" data-toggle="modal" --}}
                             data-target="#exampleModal{{$key}}">Delete</button>

                       <!-- Modal -->
                      <div class="modal fade" id="exampleModal{{$key}}" tabindex="-1" role="dialog" --}}
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Unsubscribe...</h5>
                                        <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" >
                                        Are you sure you want to remove <u><b style="color:firebrick">
                                                {{$modal->members->fname}} {{$modal->members->lname}} ?</b></u>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                        <form method="POST" action="{{route('modalmembers.destroy',$modal->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button  type="submit" class="btn btn-danger">Yes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                    </td>











                @endif

                @endforeach

            </tbody>

        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection


{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    function generateRandomColorRgb() {
  const red = Math.floor(Math.random() * 256);
  const green = Math.floor(Math.random() * 256);
  const blue = Math.floor(Math.random() * 256);
  return "rgb(" + red + ", " + green + ", " + blue + ")";
}
    </script> --}}

