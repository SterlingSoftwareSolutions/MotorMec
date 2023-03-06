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
        <form class="col-12 col-md-4 offset-md-3" id="form" action="" method="post">
            @csrf
            <h2 class="mt-5"> Sign Up</h2>
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
            <div class="agree row">
                <label for=""><input type="checkbox" name="" id=""> I have read the Terms of Use</label>
            </div>
            <button type="submit ">Get Started</button>

            <div class="sign-up">
                <h6 class="mt-4">Already have an Account? <a href="" style="color:#2B684C">login</a></h>
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