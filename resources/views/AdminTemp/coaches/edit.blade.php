@extends('layout.template')

@section('titre')
Edit Coach
@endsection

@section('titrepage')
<h1>Edit Coach</h1>
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
        left: 235px;
    }

    h1 {
        position: relative;
        left: 410px;
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
        <h3 class="card-title">Edit Coach</h3>
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
    <form id="quickForm" method="post" action="{{route('coaches.update',$coach->id)}}">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="cin"><b style="color: red">*</b>CIN:</label>
                <input type="number" name="cin" value="{{$coach->cin}}" class="form-control" id="cin"
                    placeholder="Enter coach's CIN">
            </div>

            <div class="form-group">
                <label for="fname"><b style="color: red">*</b>First Name:</label>
                <input type="text" name="fname" value="{{$coach->fname}}" class="form-control" id="fname"
                    placeholder="Enter coach's First Name">
            </div>

            <div class="form-group">
                <label for="lname"><b style="color: red">*</b>Last Name:</label>
                <input type="text" name="lname" value="{{$coach->lname}}" class="form-control" id="lname"
                    placeholder="Enter coach's Last Name">
            </div>

            <div class="form-group">
                <label for="gender"><b style="color: red">*</b>Gender:</label>
                <select name="gender" class="form-control" id="gender">
                    @if($coach->gender)

                    <option value="{{$coach->gender}}" selected>{{$coach->gender}}</option>
                    @if ($coach->gender=="Male")
                    <option value="Male" hidden>Male</option>
                    @else
                    <option value="Male">Male</option>
                    @endif

                    @if ($coach->gender=="Female")
                    <option value="Female" hidden>Female</option>
                    @else
                    <option value="Female">Female</option>
                    @endif

                    @endif
                </select>

            </div>

            <div class="form-group">
                <label for="scontract"><b style="color: red">*</b>Start of contract:</label>
                <input type="date" name="scontract" value="{{$coach->scontract}}" class="form-control" id="scontract">
            </div>

            <div class="form-group">
                <label for="econtract"><b style="color: red">*</b>End of contract:</label>
                <input type="date" name="econtract" value="{{$coach->econtract}}" class="form-control" id="econtract">
            </div>

            <div class="form-group">
                <label for="sports"><b style="color: red">*</b>Coaching:</label>
                <select name="sports_id" class="form-control" id="sports">
                    @foreach ($sports as $sport)

                    @php $selected=""; @endphp
                    @if ($sport->id==$coach->sports_id)
                    @php $selected="selected"; @endphp
                    @endif
                    <option {{$selected}} value="{{$sport->id}}">{{$sport->name}}</option>


                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="height">Height:</label>
                <input type="number" step="0.01" name="height" value="{{$coach->height}}" class="form-control"
                    id="height">
            </div>

            <div class="form-group">
                <label for="weight">Weight:</label>
                <input type="number" step="0.01" name="weight" value="{{$coach->weight}}" class="form-control"
                    id="weight">
            </div>

            <div class="form-group">
                <label for="address"><b style="color: red">*</b>Address:</label>
                <input type="text" name="address" value="{{$coach->address}}" class="form-control" id="address"
                    placeholder="Enter coach's address">
            </div>

            <div class="form-group">
                <label for="birth"><b style="color: red">*</b>Birthday:</label>
                <input type="date" name="birth" value="{{$coach->birth}}" class="form-control" id="birth">
            </div>

            <div class="form-group">
                <label for="tel"><b style="color: red">*</b>Phone Number:</label>
                <input type="tel" name="tel" value="{{$coach->tel}}" class="form-control" id="tel">
            </div>

            <div class="form-group">
                <label for="email"><b style="color: red">*</b>E-mail:</label>
                <input type="email" name="email" value="{{$coach->email}}" class="form-control" id="email">
            </div>

            <div class="form-group">
                <label for="job">Job:</label>
                <input type="text" name="job" value="{{$coach->job}}" class="form-control" id="job">
            </div>

            <div class="form-group">
                <label for="password"><b style="color: red">*</b>Password:</label>
                <input type="password" name="password" class="form-control" id="password"
                    placeholder="Enter the new password">
            </div>

            <div class="form-group">
                <label for="image"><b style="color: red">*</b>Upload Picture:</label>
                <input type="file" name="image" id="image" class="inputfile" />

            </div>


        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-outline-light" style="float: right">Edit</button>
        </div>
    </form>
</div>


@endsection
