<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container-sm">
        <form class=" mx-auto my-4 p-4 shadow  rounded" method="post" action="">
            @csrf

            <h1 class="title mb-3">Register</h1>

            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <!-- Business Name -->
            <div class="mb-3">
                <label for="businessname" class="form-label">Business Name</label>
                <input type="text" class="form-control" id="businessname" name="businessname">
            </div>

            <!-- Location -->
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location">
            </div>

            <!-- Username -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <!-- Phone -->
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>


            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <!-- Password Confirmation -->
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
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
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>

            <label class="form-label mt-3">Already have an account? <a href="/login">Login</a></label>

        </form>
    </div>
</body>

</html>