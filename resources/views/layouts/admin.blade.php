@extends('layouts.app')

@section('content')

<head>
    <title>Simple login form</title>

    <style>
        form {
            border: 5px solid #f1f1f1;
        }

        input[type=email],
        input[type=password] {
            width: 100%;
            padding: 16px 8px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        #submit {
            background-color: #ed563b;
            color: white;
            padding: 14px 0;
            margin: 10px 0;
            border: none;
            cursor: grabbing;
            width: 100%;
        }

        #tit {
            text-align: center;
            fone-size: 18;
        }

        #submit:hover {
            opacity: 0.8;
        }

        #form {
            text-align: left;
            margin: 24px 50px 12px;
        }

        #cont {
            padding: 16px 0;
            text-align: left;
        }

        span.psw {
            float: right;
            padding-top: 0;
            padding-right: 15px;
        }
        #adm{
            margin-top: 40px;
        }

        /* Change styles for span on extra small screens */
    </style>
</head>
<div class="modal fade" id="adm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document" >
        <div class="modal-content" style="background-color:rgb(255, 255, 255)">

            <div id="bcc">

                <h1 id="tit">Admin Login Form</h1>

                    <hr id="this">


                    <form method="POST" action='{{ url("login") }}'>
                        @csrf

                        <div class="container" id="cont">
                            <label for="email" id="coll"><strong>Email:</strong></label>
                            <input id="email" type="email" @error('email') is-invalid @enderror name="email"
                                value="{{ old('email') }}" placeholder="Enter Email">

                            <label for="password" id="coll"><strong>Password:</strong></label>
                            <input type="password" placeholder="Enter Password" @error('email') is-invalid @enderror
                                value="{{ old('password') }}" name="password" required>


                        </div>

                        <button id="subm" type="submit">Login</button>

                    </form>

            </div>
        </div>
    </div>
</div>


