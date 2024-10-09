@extends('layout.template')

@section('titre')
Ended subscriptions
@endsection

@section('titrepage')
<h1 id="title">Ended subscriptions</h1>
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
    h1 {
position: relative;
left: 330px;
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
                    <th>Forget</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($ends as $end)
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
                <td>
                   <form method="post" action="{{route('end.destroy',$end->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning"><i class="fa fa-trash"></i></button>
                   </form>
                </td>
                </tr>
                @endforeach

                  {{-- @foreach ($modals as $modal)
                <tr style="background-color: rgb(212, 14, 14)">
                <<td><img id="pic" width="100" height="50" src="{{asset('/image/member/'.$modal->image)}}"
                    alt="lost it"> </td>
                <td>{{$modal->members->fname}} {{$modal->members->lname}}</td>
                <td>{{$modal->members->gender}}</td>
                <td>{{$modal->sports->name}}</td>
                @if ((int)$modal->coaches_id)
                <td id="cy">{{$modal->coaches->fname}} {{$modal->coaches->lname}}</td>
            @else
                <td style="background-color: rgb(248, 125, 125)"><em>"No Coach"</em></td>
            @endif

                <td>{{$modal->start}}</td>
                <td>{{$modal->end}}</td>
                <td>{{$modal->pay}} Dt</td>

                </tr>

                @endforeach --}}
            </tbody>

        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
