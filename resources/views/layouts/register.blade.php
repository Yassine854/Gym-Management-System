<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                @extends('layouts.app')
                @section('content')

                <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
                    integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
                    crossorigin="anonymous">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-20">
                            <div class="card">
                                <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}
                                </div>

                                <div class="card-body">
                                    @isset($url)
                                    <form method="POST" action='{{ url("register/$url") }}'
                                        aria-label="{{ __('Register') }}">
                                        @else
                                        <form method="POST" action="{{ route('register') }}"
                                            aria-label="{{ __('Register') }}">
                                            @endisset
                                            @csrf
                                            <div>
                                                <label id="icon" for="fname"><i class="fas fa-user"></i></label>
                                                <input type="text" name="fname" id="fname" placeholder="First Name"
                                                    required />
                                            </div>

                                            <div>
                                                <label id="icon" for="lname"><i class="fas fa-user"></i></label>
                                                <input type="text" name="lname" id="name" placeholder="Last Name"
                                                    required />
                                            </div>

                                            <div>
                                                <label id="icon" for="address"><i
                                                        class="fa fa-location-arrow"></i></label>
                                                <input type="text" name="address" id="address" placeholder="Address"
                                                    required />
                                            </div>

                                            <div>
                                                <label id="icon" for="birth"><i class="fa fa-birthday-cake"></i></label>
                                                <input type="date" name="birth" id="birth" placeholder="Birthday"
                                                    required />
                                            </div>

                                            <div>
                                                <label id="icon" for="tel"><i class="fa fa-phone-square"></i></label>
                                                <input type="integer" name="tel" id="tel" placeholder="Phone Number"
                                                    required />
                                            </div>

                                            <div>
                                                <label id="icon" for="email"><i class="fas fa-envelope"></i></label>
                                                <input type="email" name="email" id="email" placeholder="Email"
                                                    required />
                                            </div>

                                            <div>
                                                <label id="icon" for="password"><i
                                                        class="fas fa-unlock-alt"></i></label>
                                                <input type="password" name="password" id="password"
                                                    placeholder="password" required />
                                            </div>



                                            <hr>
                                            <div class="gender">
                                                <input type="radio" value="Male" id="male" name="gender" checked />
                                                <label for="male" class="radio">Male</label>

                                                <input type="radio" value="Female" id="female" name="gender" />
                                                <label for="female" class="radio">Female</label>

                                            </div>

                                            <div class="btn-block">
                                                <button type="submit" href="/">Submit</button>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection







</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
</div>
</div>
</div>
</div>
