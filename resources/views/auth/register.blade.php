

<style>
    html,
    body {
        display: flex;
        justify-content: center;
        height: 100%;
    }

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
    }

    p {
        font-size: 12px;
    }

    hr {
        color: #a9a9a9;
        opacity: 0.3;
    }

    .main-block {
        max-width: 340px;
        min-height: 460px;
        padding: 10px 0;
        margin: auto;
        border-radius: 5px;
        border: solid 1px #ccc;
        box-shadow: 1px 2px 5px rgba(0, 0, 0, .31);
        background: #ebebeb;
    }

    form {
        margin: 0 30px;
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

    input[type=text],
    input[type=password],
    input[type=integer],
    input[type=date],
    input[type=email] {
        width: 300px;
        height: 36px;
        margin: 13px 0 0 -5px;
        padding-left: 10px;
        border-radius: 0 5px 5px 0;
        border: solid 1px #cbc9c9;
        box-shadow: 1px 2px 5px rgba(0, 0, 0, .09);
        background: #fff;
    }

    input[type=password] {
        margin-bottom: 15px;
    }

    #icon {
        display: inline-block;
        padding: 9.3px 15px;
        box-shadow: 1px 2px 5px rgba(0, 0, 0, .09);
        background: #ed563b;
        color: #fff;
        text-align: center;
    }

    .btn-block {
        margin-top: 10px;
        text-align: center;
    }

    button {
        width: 100%;
        padding: 10px 0;
        margin: 10px auto;
        border-radius: 5px;
        border: none;
        background: #ed563b;
        font-size: 14px;
        font-weight: 600;
        color: #fff;
    }

    button:hover {
        background: #ed563b;
    }
</style>


<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
    integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}</div>

                <div class="card-body">
                    @isset($url)
                    <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                        @else
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @endisset
                            @csrf

                            {{-- <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror"
                                    name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                @error('fname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                </div>

                <div class="form-group row">
                    <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                    <div class="col-md-6">
                        <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror"
                            name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                        @error('lname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                    <div class="col-md-6">
                        <select name="gender" class="form-control" id="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>

                        @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                    <div class="col-md-6">
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                            name="address" value="{{ old('address') }}" required autocomplete="lname" autofocus>

                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="birth" class="col-md-4 col-form-label text-md-right">{{ __('Birthday') }}</label>

                    <div class="col-md-6">
                        <input id="birth" type="date" class="form-control @error('birth') is-invalid @enderror"
                            name="birth" value="{{ old('birth') }}" required autocomplete="lname" autofocus>

                        @error('birth')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                    <div class="col-md-6">
                        <input id="tel" type="integer" class="form-control @error('tel') is-invalid @enderror"
                            name="tel" value="{{ old('tel') }}" required autocomplete="lname" autofocus>

                        @error('tel')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>



                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm"
                        class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button> --}}

                        <div>
                            <label id="icon" for="fname"><i class="fas fa-user"></i></label>
                            <input type="text" name="fname" id="fname" placeholder="First Name" required />
                        </div>

                        <div>
                            <label id="icon" for="lname"><i class="fas fa-user"></i></label>
                            <input type="text" name="lname" id="name" placeholder="Last Name" required />
                        </div>

                        <div>
                            <label id="icon" for="address"><i class="fa fa-location-arrow"></i></label>
                            <input type="text" name="address" id="address" placeholder="Address" required />
                        </div>

                        <div>
                            <label id="icon" for="birth"><i class="fa fa-birthday-cake"></i></label>
                            <input type="date" name="birth" id="birth" placeholder="Birthday" required />
                        </div>

                        <div>
                            <label id="icon" for="tel"><i class="fa fa-phone-square"></i></label>
                            <input type="integer" name="tel" id="tel" placeholder="Phone Number" required />
                        </div>

                        <div>
                            <label id="icon" for="email"><i class="fas fa-envelope"></i></label>
                            <input type="email" name="email" id="email" placeholder="Email" required />
                        </div>

                        <div>
                            <label id="icon" for="password"><i class="fas fa-unlock-alt"></i></label>
                            <input type="password" name="password" id="password" placeholder="password" required />
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

