@extends('layout.template')

@section('titre')
  Add class
@endsection

@section('titrepage')
 <h1> Add class </h1>
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
left: 245px;
}

h1 {
position: relative;
left: 425px;
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
        <h3 class="card-title">Add Class</h3>
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
    <form id="quickForm" method="post" action="{{route('tasks.store')}}">
      @csrf
      <div class="card-body">
      <div class="form-group">
        <label for="sports"><b style="color: red">*</b>Sport:</label>
        <select name="sports_id" class="form-control" id="sports">
            <option disabled selected value>--- Choose a sport ---</option>
        @foreach ($sports as $sport)
           <option value="{{$sport->id}}">{{$sport->name}}</option>
        @endforeach
        </select>
    </div>


    <div class="form-group">
        <label for="coaches"><b style="color: red">*</b>Coach:</label>
        <select name="coaches_id" class="form-control" id="coaches">
            <option disabled selected value><---Choose a sport First---></option>
        @foreach ($coaches as $coach)

        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="day"><b style="color: red">*</b>Day:</label>
        <select name="day" class="form-control" id="day">
            <option disabled selected value><---Choose a day---></option>
                <option value=0>Sunday</option>
                <option value=1>Monday</option>
                <option value=2>Tuesday</option>
                <option value=3>Wednesday</option>
                <option value=4>Thursday</option>
                <option value=5>Friday</option>
                <option value=6>Saturday</option>

        </select>
    </div>

          <div class="form-group">
            <label for="start" ><b style="color: red">*</b>Starting Time:</label>
            <input type="time" name="start" class="form-control" id="start">
          </div>

          <div class="form-group">
            <label for="end" ><b style="color: red">*</b>Ending Time:</label>
            <input type="time" name="end" class="form-control" id="end">
          </div>

        </div>


        <div class="card-footer">
            <button style="float: right" type="submit" class="btn btn-outline-light">Add</button>
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
        $('select[name="coaches_id"]').append('<option id="colour" disabled selected value>---Coaches of '+sel+'---</option>');

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
<style>
    #colour{
        color:black !important;
        font-weight:bold !important;
    }
</style>
@endsection
