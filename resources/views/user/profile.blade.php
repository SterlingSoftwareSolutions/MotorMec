<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        @if (Auth::guest())
            <h1 class="title">You are not logged in</h1>
        @else
            <form class="mx-auto p-4 shadow mt-4 rounded" method="post" action="users/{{Auth::user()->id}}">
                @csrf
                @method('put')
                <h1 class="title mb-3">{{ucwords(Auth::user()->name)}}'s Profile</h1>
                <div class="table mb-3">

                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}">
                    </div>

                    <!-- Role -->
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <input type="text" class="form-control" id="role" name="role" value="{{Auth::user()->role}}">
                    </div>

                    <!-- Business Name -->
                    <div class="mb-3">
                        <label for="businessname" class="form-label">Business Name</label>
                        <input type="text" class="form-control" id="businessname" name="businessname"  value="{{Auth::user()->businessname}}">
                    </div>

                    <!-- Location -->
                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location"  value="{{Auth::user()->location}}">
                    </div>

                    <!-- Username -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username"  value="{{Auth::user()->username}}">
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"  value="{{Auth::user()->email}}">
                    </div>

                    <!-- Phone -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone"  value="{{Auth::user()->phone}}">
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Unchanged" disabled>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="row mx-auto justify-content-between">
                    <div class="col-auto p-0">
                        <a href="/">
                            <button type="button" class="btn btn-primary">Home</button>
                        </a>
                    </div>
                    <div class="col-auto p-0">
                        <form method="post" action="users/{{Auth::user()->id}}">
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete Account</button>
                        </form>
                    </div>

                    <div class="col-auto p-0">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>

            </form>
        @endif
    </div>
</body>

</html>