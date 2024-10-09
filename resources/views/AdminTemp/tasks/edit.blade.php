@extends('layout.template')

@section('titre')
 Edit class
@endsection

@section('titrepage')
<h1> Edit class</h1>
<hr>
@endsection

@section('contenu')
<style>
hr {

border: none;
height: 2px;
width: 250px;
background: firebrick;
position: relative;
left: 250px;
}

h1 {
position: relative;
left: 450px;
text-transform: uppercase;
color: firebrick
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
        <h3 class="card-title">Edit Task</h3>
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
    <form method="post" action="{{route('tasks.destroy',$task->id)}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger" style="float: right;margin-right:10px;">Delete</button>
    </form>
    <form id="quickForm" method="post" action="{{route('tasks.update',$task->id)}}">
      @csrf
      @method('PUT')
      <div class="card-body">
      <div class="form-group">
        <label for="sports"><b style="color: red">*</b>Sport:</label>
        <select name="sports_id" class="form-control" id="sports">
            <option disabled selected value>--- Choose a sport ---</option>
        @foreach ($sports as $sport)

                @php $selected=""; @endphp
                @if ($sport->id==$task->sports_id)
                    @php $selected="selected"; @endphp
                @endif
                <option {{$selected}} value="{{$sport->id}}">{{$sport->name}}</option>


        @endforeach
        </select>
    </div>


    <div class="form-group">
        <label for="coaches"><b style="color: red">*</b>Coach:</label>
        <select name="coaches_id" class="form-control" id="coaches">
            <option disabled selected value><---Change the sport First---></option>
        @foreach ($coaches as $coach)

        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="day"><b style="color: red">*</b>Day:</label>
        <select name="day" class="form-control" id="day">


            <option value={{$task->day}} selected><?php echo date('l', strtotime("Sunday +{$task->day} days")); ?></option>
            @if ($task->day==0)
                <option value=0 hidden>Sunday</option>
            @else
                <option value=0 >Sunday</option>
            @endif

            @if ($task->day==1)
                <option value=1 hidden>Monday</option>
            @else
                <option value=1 >Monday</option>
            @endif

            @if ($task->day==2)
                <option value=2 hidden>Tuesday</option>
            @else
                <option value=2 >Tuesday</option>
            @endif

            @if ($task->day==3)
                <option value=3 hidden>Wednesday</option>
            @else
                <option value=3 >Wednesday</option>
            @endif

            @if ($task->day==4)
                <option value=4 hidden>Thursday</option>
            @else
                <option value=4 >Thursday</option>
            @endif

            @if ($task->day==5)
                <option value=5 hidden>Friday</option>
            @else
                <option value=5 >Friday</option>
            @endif

            @if ($task->day==6)
                <option value=6 hidden>Saturday</option>
            @else
                <option value=6 >Saturday</option>
            @endif




        </select>
    </div>

          <div class="form-group">
            <label for="time" ><b style="color: red">*</b>Starting Time:</label>
            <input type="time" value="{{$task->start}}" name="task_time" class="form-control" id="time">
          </div>

          <div class="form-group">
            <label for="end" ><b style="color: red">*</b>Ending Time:</label>
            <input type="time" value="{{$task->end}}" name="task_end" class="form-control" id="end">
          </div>



        </div>


        <div class="card-footer">
            <button style="float: right" type="submit" class="btn btn-outline-light">Edit</button>
          </div>
        </form>
    </div>
      </div>

      <!-- /.card-body -->

  </div>



<script src="{{asset('js/jquery.min.js')}}"> </script>
<script > $(document).on('change', '#sports', function() {
    var sel = $( "#sports option:selected" ).text();
    $.get('/Coachs/'+$(this).val(),function(data){
        console.log(data);
        $('select[name="coaches_id"]').empty();
        $('select[name="coaches_id"]').append('<option disabled selected value><---Coaches of '+sel+'---></option>');

        $.each(data.coachs, function (key, subcatObj) {
                $('select[name="coaches_id"]').append(
                    "<option value='" +
                        subcatObj.id +
                        "'>" +
                        subcatObj.fname +
                        " " +
                        subcatObj.lname +
                        " </option>"
                );
            });

    })

 });
</script>
@endsection
