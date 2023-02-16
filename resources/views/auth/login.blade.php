<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container col-11 col-sm-9 col-md-7 g-0 ">
        <img class="col-6 col-md-6 p-0" src="{{asset('images/car.jpg')}}" alt="">
        <form class="col-6 col-md-6 h-80 align-middle" id="form" action="" method="post">
            <h2>Sign in</h2>
            <h4>Login with your user credentials</h4>
            <div class="input-control">
                <input id="sign" name="sign" type="text" placeholder="User Name, Email or Mobile Number">
                <div class="error"></div>
            </div><div class="input-control">
                <input type="password" name="password" id="password" placeholder="Password">
                <div class="error"></div>
            </div>
            <div class="agree row">
                <label for=""><input type="checkbox" name="" id=""> I have read and accept terms of this <a href="">User Agreement</a></label>
                
            </div>
            <div class="forgot">
                <p><a href="">Forgot Password?</a></p>
            </div>
            
            <button type="submit ">log in</button>

            <div class="sign-up">
            <h6 class="mt-4">Dont have an Account? <a href="/register">Sign up</a> </h6>
            </div>

            <div class="copyright">
                <h6>
                    MotorMec <br>
                    © 2023. All RIGHTS RESERVED
                </h6>
            </div>
        </form>
    </div>   
</body>
</html>