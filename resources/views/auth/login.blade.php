@extends('layouts.auth')

@section('content')
    <div class="login">
        <div class="account-login">
           <h1>Account Login</h1>
           @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were problems
                    <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
           <form role="form" method="POST" class="login-form" action="{{ url('login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                 <input type="email" placeholder="Email address" class="form-control" name="email" value="{{ old('email') }}">
              </div>
              <div class="form-group">
                 <input type="password" placeholder="Password" name="password" class="form-control">
              </div>
              <div class="remember">
                 <label class="custom-checkbox">Remember me
                 <input type="checkbox" name="remember">
                 <span class="checkmark"></span>
                 </label>
              </div>
              <button class="btn" type="submit">Login</button>
           </form>
        </div>
    </div>
      <style type="text/css">
        * {
        margin: 0px;
        padding: 0px;
        }
        .login {
        background: linear-gradient(to bottom, #0099ff 0%, #fff 100%);
        height: 100vh;
        width: 100%;
        justify-content: center;
        align-items: center;
        display: flex;
        }
        .account-login {
        width: 500px;
        }
        .form-control:focus {
        box-shadow: none;
        }
        p a {
        padding-left: 2px;
        }
        .account-login h1 {
        font-size: 25px;
        text-align: left;
        color: #fff;
        text-transform: uppercase;
        font-weight: bold;
        border-radius: 5px;
        }
        .login-form input {
        width: 100%;
        position: relative;
        border-bottom: 1px solid #a39e9e;
        padding: 0;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        box-shadow: none;
        height: 63px;
        border-radius: 0px;
        }
        .login-form {
        background: #fff;
        float: left;
        width: 100%;
        padding: 40px;
        border-radius: 5px;
        }
        button.btn {
        width: 100%;
        background: #009cff;
        font-size: 20px;
        padding: 11px;
        color: #fff;
        border: 0px;
        margin: 10px 0px 20px;
        }
        .btn:hover{
            color: #fff;
            opacity: 0.8;
        }
        p {
        float: left;
        width: 100%;
        text-align: center;
        font-size: 14px;
        }
        .remember {
        float: left;
        width: 100%;
        margin: 10px 0 0;
        }
        /* Customize the label (the container) */
        .custom-checkbox {
        display: block;
        position: relative;
        padding-left: 27px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 13px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        font-weight: normal;
        padding-top: 2px;
        float: left;
        }
        /* Hide the browser's default checkbox */
        .custom-checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
        }
        /* Create a custom checkbox */
        .custom-checkbox .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 20px;
        width: 20px;
        background-color: #bfbcbc;
        }
        /* On mouse-over, add a grey background color */
        .custom-checkbox:hover input ~ .checkmark {
        background-color: #747474;
        }
        /* When the checkbox is checked, add a blue background */
        .custom-checkbox input:checked ~ .checkmark {
        background-color: #2196F3;
        }
        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
        content: "";
        position: absolute;
        display: none;
        }
        /* Show the checkmark when checked */
        .custom-checkbox input:checked ~ .checkmark:after {
        display: block;
        }
        /* Style the checkmark/indicator */
        .custom-checkbox .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        }
        @media (max-width: 767px){
        .account-login {
            width: 90%;
          }
        }
        </style>
@endsection