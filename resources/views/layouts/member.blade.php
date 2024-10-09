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
            height: 40px;
            box-shadow: 1px 2px 5px rgba(0, 0, 0, 0.603);
            border-radius: 8px;
        }

        #submit {
            background-color: #ed563b;
            color: white;
            padding: 14px 0;
            margin: 10px 0;
            border: none;
            cursor: pointer;
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
        #bcc{
            max-width: 600px;
            min-height: 460px;
            padding: 10px 0;
            margin: auto;
            border-radius: 5px;
            border: solid 1px #ccc;
            box-shadow: 1px 2px 5px rgba(0, 0, 0, .31);
            /* background: #fffdfa; */
            background-image: url('https://media.istockphoto.com/photos/dumbbells-on-floor-with-empty-gym-background-picture-id919530340?k=20&m=919530340&s=170667a&w=0&h=Ub1VQjpo-aRd4QTXOBF21bqV3co0yiBB7_PhQjCWt0A=');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            width: 500px;
        }
        #coll{
            color: #ffffffd7;
            text-shadow: 1px 1px 2px black;
        }
        #exampleModal{
            margin-top: 40px;
        }

        /* Change styles for span on extra small screens */
    </style>
</head>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document" >
        <div class="modal-content">


            <div id="bcc">
                <h1 >Member Login Form</h1>
                <hr id="this">


                <form method="POST" action='{{ url("login/member") }}'>
                    @csrf
                    <div class="container" id="cont">
                        <label for="email" id="coll" ><strong>Email:</strong></label>
                            <input id="email" type="email" @error('email') is-invalid @enderror name="email"
                            value="{{ old('email') }}" placeholder="Enter Email" required/>
                        <br><br>
                        <label for="password" id="coll"><strong>Password:</strong></label>
                            <input type="password" placeholder="Enter Password" @error('email') is-invalid @enderror
                            value="{{ old('password') }}" name="password" required/>


                    </div>
                    <br/>
                    <button id="subm" type="submit">Login</button>

                </form>

            </div>
        </div>
    </div>
</div>
