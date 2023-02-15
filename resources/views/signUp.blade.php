<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script defer src="./index.js"></script>
</head>
<body>
<div class="container col-9 col-sm-9 col-md-7 g-0 offset-md-3">
        <img class="col-6 col-md-6 p-0 d-none d-sm-block" src="{{asset('images/car.jpg')}}" alt="">
        <form class="col-12 col-md-6 h-80 align-middle" id="form" action="" method="post">
            <h2>Sign Up</h2>
            <div class="input-control">
                <input id="name" name="name" type="text" placeholder="Name">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <input id="businessname" name="businessname" type="text" placeholder="Business Name">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <input id="username" name="username" type="text" placeholder="User Name">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <input id="email" name="email" type="text" placeholder="Email Adress">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <input type="tel" name="mobile" id="mobile" placeholder="Mobile Number">
                <div class="error"></div>
            </div>

            <div class="input-control">
                <input type="password" name="password" id="password" placeholder="Password">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <input type="password" name="password2" id="password2" placeholder="Confirm Password">
                <div class="error"></div>
            </div>
            <button type="submit ">Get Started</button>

            <div class="sign-up">
                <h6 class="mt-4">Dont have an Account? a Sign up</h>
            </div>
        </form>
    </div>   
</body>
</html>