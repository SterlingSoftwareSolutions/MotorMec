<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mr-0">
        <div class="logo inline">
            <img src="{{asset('images/logo.jpg')}}" alt=""> <h2>Motor Mec</h2>
        </div> 
        <form class="col-4 align-right" id="form" action="" method="post">
            @csrf

            <h2>Sign in</h2>
            <h4>Login with Username, Email and Mobile Number & Password</h4>

            {{-- Username/Email/Phone --}}
            <div class="input-control">
                <input id="username" name="username" type="text" placeholder="User Name, Email or Mobile Number">
                @error('username')
                    <div class="error">{{$message}}</div>
                @enderror
            </div>

            {{-- Password --}}
            <div class="input-control">
                <input type="password" name="password" id="password" placeholder="Password">
                @error('password')
                    <div class="error">{{$message}}</div>
                @enderror
            </div>

            <div class="inline d-flex justify-content-between">
                <div class="agree row">
                    <label for=""><input type="checkbox" name="" id=""> I have read the Terms of Use</label>
                </div>
                <div class="forgot right">
                    <p><a href="">Forgot Password?</a></p>
                </div>
            </div>

            <!-- Submit -->
            <button type="submit ">log in</button>

            <div class="sign-up d-flex justify-content-start">
                <h6 class="mt-4">No Account? <a href="/register" style="color:#2B684C">Sign up</a> </h6>
            </div>

            <div class="copyright">
                <h6>
                    MotorMec <br>
                    ?? 2023. All RIGHTS RESERVED
                    <br>
                <a href="">Terms of use</a> | <a href="">Privacy Policy</a>
                </h6>
            </div>

            <div class="row mx-auto justify-content-between">
                <div class="col-auto form-check my-auto">
                    <input type="checkbox" class="form-check-input" id="check">
                    <label class="form-check-label" for="check">I accept the Terms of Use</label>
                </div>
            </div>

            <label class="form-label mt-3">Don't have an account? <a href="/register">Register</a></label>

        </form>
    </div>
</body>

</html>