<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form class="mx-auto p-4 shadow mt-4 rounded" method="post" action="">
            @csrf
            
            <h1 class="title mb-3">Login</h1>

            <!-- Username -->
            <div class="mb-3">
                <label for="username" class="form-label">Username, Email or Phone</label>
                <input type="text" class="form-control" id="username" name="username">
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <!-- Errors -->
            <x-input-error :messages="$errors->all()" class="mt-2" />

            <!-- Submit -->
            <div class="row mx-auto justify-content-between">
                <div class="col-auto form-check my-auto">
                    <input type="checkbox" class="form-check-input" id="check">
                    <label class="form-check-label" for="check">I accept the Terms of Use</label>
                </div>
                <div class="col-auto p-0">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>

            <label class="form-label mt-3">Don't have an account? <a href="/register">Register</a></label>

        </form>
    </div>
</body>

</html>