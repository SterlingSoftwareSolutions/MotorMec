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
            <h1 class="title">{{$auth->user->role}} Dashboard</h1>
        @else
            <form class="w-50 mx-auto p-4 shadow mt-4 rounded" method="post" action="/logout">
                @csrf
                <h1 class="title mb-4">{{ucwords(Auth::user()->role)}} Dashboard</h1>

                <!-- Submit -->
                <div class="row mx-auto justify-content-between">
                    <div class="col-auto p-0">
                        <a href="/profile">
                            <button type="button" class="btn btn-primary" >Profile</button>
                        </a>
                    </div>
                    <div class="col-auto p-0">
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </div>
                </div>
            </form>
        @endif
    </div>
</body>

</html>