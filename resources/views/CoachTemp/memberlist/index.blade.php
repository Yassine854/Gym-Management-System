@extends('CoachTemp.layout.template')

@section('titre')
Members List
@endsection

@section('titrepage')
<h2 id="title">Members subscribed in {{ucfirst($coach->sports->name)}}</h2>
<hr>
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

#bc {
        background-image: url('https://media.istockphoto.com/photos/abstract-blur-orange-and-yellow-color-tone-background-with-glowing-picture-id1060839456?k=20&m=1060839456&s=170667a&w=0&h=3Los9CDaoTVMNcpnVTni15Pbx_HWqpKWzNsQ0qvLmgk=');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

h2{
        position: relative;
        left: 338px;
        text-transform: uppercase;
        color: firebrick;
        font: 700 20px "Oswald", sans-serif;
    }

    hr {

border: none;
height: 2px;
width: 450px;
background: firebrick;
position: relative;
left: 250px;
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
                <th>Address</th>
                <th>Subscription duration</th>
                <th>Start of Subscription</th>
                <th>End of Subscription</th>
            </tr>
            </thead>
            <tbody>

                @foreach ($modals as $modal)
                    @if ($modal->coaches_id==$coach->id)
                        <tr style="background-color: rgb(245, 191, 90)">
                            <td><img id="pic" width="100" height="50" src="{{asset('/image/member/'.$modal->image)}}"
                                alt="lost it"> </td>
                            <td >{{$modal->members->fname}} {{$modal->members->lname}}</td>
                            <td>{{$modal->members->gender}}</td>
                            <td>{{$modal->members->address}}</td>
                            <td>{{$modal->sub}} Months</td>
                            <td>{{$modal->start}}</td>
                            <td >{{$modal->end}}</td>
                        </tr>
                    @endif
                @endforeach



            </tbody>

          </table>
        </div>
        <!-- /.card-body -->
      </div>
    @endsection
