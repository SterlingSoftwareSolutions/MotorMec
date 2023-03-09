<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script defer src="./index.js"></script>
</head>

<body>
    <div class="container mr-0">
        <div class="logo inline">
            <img src="{{asset('images/logo.jpg')}}" alt="">
            <h2>Motor Mec</h2>
        </div>
        <form class="col-4 align-right m-0" id="form" action="{{route('register')}}" method="post">
            @csrf
            <h2>Sign Up</h2>
            <div class="input-control">
                <input id="name" name="name" type="text" placeholder="Name">
                @error('name')
                    <div class="error">{{$message}}</div>
                @enderror
            </div>
            <div class="input-control">
                <input id="businessname" name="businessname" type="text" placeholder="Business Name">
                @error('businessname')
                    <div class="error">{{$message}}</div>
                @enderror
            </div>
            <div class="input-control">
                <input id="username" name="username" type="text" placeholder="User Name">
                @error('username')
                    <div class="error">{{$message}}</div>
                @enderror
            </div>
            <div class="input-control">
                <input id="email" name="email" type="text" placeholder="Email Adress">
                @error('email')
                    <div class="error">{{$message}}</div>
                @enderror
            </div>
            <div class="input-control">
                <input type="tel" name="phone" id="phone" placeholder="Mobile Number">
                @error('phone')
                    <div class="error">{{$message}}</div>
                @enderror
            </div>

            <div class="input-control">
                <input type="password" name="password" id="password" placeholder="Password">
                @error('password')
                    <div class="error">{{$message}}</div>
                @enderror
            </div>
            <div class="input-control">
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                <div class="error"></div>
            </div>

            <button type="submit ">Get Started</button>

            <div class="sign-up">
                <h6 class="mt-4">Already have an Account? <a href="/login" style="color:#2B684C">login</a></h>
            </div>

            <div class="copyright">
                <h6>
                    MotorMec <br>
                    © 2023. All RIGHTS RESERVED
                    <br>
                    <a href="">Terms of use</a> | <a href="">Privacy Policy</a>
                </h6>
            </div>
        </form>
    </div>
</body>

</html>