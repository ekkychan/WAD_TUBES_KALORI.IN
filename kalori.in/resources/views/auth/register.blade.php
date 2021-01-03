@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>

<head>
    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <meta charset="utf-8">
        <title>Register</title>
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Font-->
        <link rel="stylesheet" type="text/css" href="css/opensans-font.css">
        <link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
        <!-- Jquery -->
        <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
        <!-- Main Style Css -->
        <link rel="stylesheet" href="css/style.css" />
    </head>

<body class="form-v4">
    <div class="page-content">
        <div class="form-v4-content">
            <div class="form-left" align="center">
                <h2>Welcome!</h2>
                <img src="css/Kalori.in webf.png">
                <p class="text-1">Perfectly light in every bite.</p>
                <p class="text-2"><span>Your dreams: </span>A diet catering company that aims to provide the simple
                    solutions to get fat loss. Many people out there have a wrong mindset about diet and we about to
                    cha.</p>
                <br>
                <div class="d-grid gap-2" ;">
                    <a class="btn btn-danger" href="{{ route('login') }}" role="button"
                        style="background-color: #d65106;">Have an
                        Account</a>
                </div>
            </div>
            <div class="form-detail">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

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
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- <form class="form-detail" action="{{ route('register') }}" method="post" id="myform">
                <h2 align="center">CREATE ACCOUNT</h2>
                @csrf
                <div class="form-row">
                    <label for="first_name">First Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-row">
                    <label for="your_email">Your Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="form-row form-row-1 ">
                        <label for="password">Password</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-row form-row-1">
                        <label for="comfirm-password">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>
                <br>
                <div class="d-grid gap-2" ;>
                    <button type="submit" style="background-color: rgba(255, 255, 255, 0.945); color: #d65106;">
                        {{ __('Register') }}
                    </button>
                </div>
                <br>
                <br>
            </form> -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script>
    // just for the demos, avoids form submit
    jQuery.validator.setDefaults({
        debug: true,
        success: function(label) {
            label.attr('id', 'valid');
        },
    });
    $("#myform").validate({
        rules: {
            password: "required",
            comfirm_password: {
                equalTo: "#password"
            }
        },
        messages: {
            first_name: {
                required: "Please enter a firstname"
            },
            last_name: {
                required: "Please enter a lastname"
            },
            your_email: {
                required: "Please provide an email"
            },
            password: {
                required: "Please enter a password"
            },
            comfirm_password: {
                required: "Please enter a password",
                equalTo: "Wrong Password"
            }
        }
    });
    </script>
</body>

</html>
@endsection