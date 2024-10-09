@extends('layout.template')

@section('titre')
Add member
@endsection



@section('titrepage')
<h1>Add Member</h1>
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
        left: 250px;
    }

    h1 {
        position: relative;
        left: 415px;
        text-transform: uppercase;
        color: firebrick;
        font: 700 4em/1 "Oswald", sans-serif;
    }

    .btn-outline-light,
    .btn-outline-light:visited {
        color: #ed563b;
        border-color: #ed563b;
    }

    .btn-outline-light:hover {
        background-color: #ed563b;
        border-color: #ed563b;
    }
    .btn-outline-light:active {
        background-color: #ed563b;
    }
</style>

<div class="card card-danger" style="background-color: rgb(250, 218, 181)">
    <div class="alert alert-secondary" style="background-color: #ed563b">
        <h3 class="card-title">Add member</h3>
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
    <form id="quickForm" method="post" action="{{route('members.store')}}">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label for="fname"><b style="color: red">*</b> Name:</label>
                <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter The First Name">
            </div>

            <div class="form-group">
                <label for="lname"><b style="color: red">*</b>Last Name:</label>
                <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter The Last Name">
            </div>

            <div class="form-group">
                <label for="gender"><b style="color: red">*</b>Gender:</label>
                <select name="gender" class="form-control" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="birth"><b style="color: red">*</b>Birthday:</label>
                <input type="date" name="birth" class="form-control" id="birth">
            </div>

            <div class="form-group">
                <label for="address"><b style="color: red">*</b>Address:</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Enter the address">
            </div>

            <div class="form-group">
                <label for="tel"><b style="color: red">*</b>Phone number:</label>
                <input type="tel" name="tel" class="form-control" id="tel" placeholder="Enter the Phone number">
            </div>

            <div class="form-group">
                <label for="email"><b style="color: red">*</b>E-mail Address:</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter the Email">
            </div>

            <div class="form-group">
                <label for="password"><b style="color: red">*</b>Password:</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter the password">
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-outline-light" style="float: right">Add</button>
          </div>
    </form>
</div>


@endsection
