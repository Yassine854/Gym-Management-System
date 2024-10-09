<head>
    <title>Simple registration form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
        body,
        div,
        h1,
        form,
        input,
        p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 16px;
            color: #666;
        }

        h1 {
            padding: 10px 0;
            font-size: 32px;
            font-weight: 300;
            text-align: center;
            color: rgba(255, 255, 255, 0.918);
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.363), 0 0 1em black, 0 0 0.5em black;
            font-family: 'Lato', sans-serif;
            border: 1px 1px black;
        }

        p {
            font-size: 12px;
        }

        hr {
            color: #a9a9a9;
            opacity: 0.3;
        }

        .main-block {
            max-width: 600px;
            min-height: 460px;
            padding: 10px 0;
            margin: auto;
            border-radius: 5px;
            border: solid 1px #ccc;
            box-shadow: 1px 2px 5px rgba(0, 0, 0, .31);
            /* background: #fffdfa; */
            width: 450px;
            background-image: url('https://media.istockphoto.com/photos/dumbbells-on-floor-with-empty-gym-background-picture-id919530340?k=20&m=919530340&s=170667a&w=0&h=Ub1VQjpo-aRd4QTXOBF21bqV3co0yiBB7_PhQjCWt0A=');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        form {
            margin: 0 30px;
            border: none;
        }

        .account-type,
        .gender {
            margin: 15px 0;
        }

        input[type=radio] {
            display: none;

        }

        label#icon {
            margin: 0;
            border-radius: 5px 0 0 5px;
        }

        label.radio {
            position: relative;
            display: inline-block;
            padding-top: 4px;
            margin-right: 20px;
            text-indent: 30px;
            overflow: visible;
            cursor: pointer;

        }

        label.radio:before {
            content: "";
            position: absolute;
            top: 2px;
            left: 0;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #ed563b;
            box-shadow: 1px 2px 5px rgba(0, 0, 0, 0.753);
            box-shadow:  inset 0 0 2px #000000;


        }

        label.radio:after {
            content: "";
            position: absolute;
            width: 9px;
            height: 4px;
            top: 8px;
            left: 4px;
            border: 3px solid #fff;
            border-top: none;
            border-right: none;
            transform: rotate(-45deg);
            opacity: 0;

        }

        input[type=radio]:checked+label:after {
            opacity: 1;
        }

        #inp {
            width: 330px;
            height: 36px;
            margin: 13px 0 0 -5px;
            padding-left: 10px;
            border-radius: 0 5px 5px 0;
            border: solid 1px #cbc9c9;
            box-shadow: 1px 2px 5px rgba(0, 0, 0, 0.603);
            background: #fff;
        }

        input[type=password] {
            margin-bottom: 15px;
        }

        #icon {
            display: inline-block;
            padding: 9.3px 15px;
            box-shadow:  1px 2px 5px rgba(0, 0, 0, 0.753);
            background: #ed563b;
            color: #fff;
            text-align: center;
            /* -moz-box-shadow:    inset 0 0 1px #000000;
            -webkit-box-shadow: inset 0 0 1px #000000; */
            box-shadow:  inset 0 0 5px #000000;
        }

        .btn-block {
            margin-top: 10px;
            text-align: center;
        }

        #subm {
            width: 100%;
            padding: 10px 0;
            margin: 10px auto;
            border-radius: 5px;
            border: none;
            background: #ed563b;
            font-size: 14px;
            font-weight: 600;
            color: #fff;
            box-shadow: 1px 2px 5px rgba(0, 0, 0, 0.603);
            box-shadow:  inset 0 0 2px #000000;
        }
        #subm:hover{
            background-color: rgba(255, 255, 255, 0.329);
            color: rgb(255, 255, 255);

        }

        #subm:active {
            background: #ffffff;
            color: #ed563b;


        }
        #this {
        border: 1px solid white;
        width: 350px;
        border-radius: 5px;
        box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.61);
}
    </style>
</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="reg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="margin-left: 50px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 360px;">


                    <div class="main-block">

                        <h1>Member registration</h1>
                        <hr id="this">
                        <form method="POST" action="{{ url("register/member") }}" >
                            @csrf
                            <div >
                                <label id="icon" for="fname"><i class="fas fa-user"></i></label>
                                <input id="inp" type="text" name="fname" id="fname" placeholder="First Name" required />
                            </div>

                            <div>
                                <label id="icon" for="lname"><i class="fas fa-user"></i></label>
                                <input id="inp" type="text" name="lname" id="name" placeholder="Last Name" required />
                            </div>

                            <div>
                                <label id="icon" for="address"><i class="fa fa-location-arrow"></i></label>
                                <input id="inp" type="text" name="address" id="address" placeholder="Address"
                                    required />
                            </div>

                            <div>
                                <label id="icon" for="birth"><i class="fa fa-birthday-cake"></i></label>
                                <input id="inp" type="date" name="birth" id="birth" placeholder="Birthday" required />
                            </div>

                            <div>
                                <label id="icon" for="tel"><i class="fa fa-phone-square"></i></label>
                                <input id="inp" type="integer" name="tel" id="tel" placeholder="Phone Number"
                                    required />
                            </div>

                            <div>
                                <label id="icon" for="email"><i class="fas fa-envelope"></i></label>
                                <input id="inp" type="email" name="email" id="email" placeholder="Email" required />
                            </div>

                            <div>
                                <label id="icon" for="password"><i class="fas fa-unlock-alt"></i></label>
                                <input id="inp" type="password" name="password" id="password" placeholder="password"
                                    required />
                            </div>



                            <hr>
                            <div class="gender">
                                <input type="radio" value="Male" id="male" name="gender" checked />
                                <label for="male" class="radio" style="color: rgba(255, 255, 255, 0.719)">Male</label>

                                <input type="radio" value="Female" id="female" name="gender"  />
                                <label for="female" class="radio" style="color: rgba(255, 255, 255, 0.719)">Female</label>

                            </div>

                            <div class="btn-block">
                                <button id="subm" type="submit">Register</button>
                            </div>
                        </form>
                    </div>





                </div>


        </div>
    </div>
</body>
