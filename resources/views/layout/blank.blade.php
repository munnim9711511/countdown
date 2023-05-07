<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <link rel="stylesheet" href="{{ asset('style.cs') }}">
    <script src="{{ asset('script.js') }}"></script>
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 shadow p-3  " style="padding: 25px;height: 100vh;">
                <p style="color: gray">
                    Notice
                </p>
                <a href="/notice" class=" btn {{ Request::path() === 'notice' ? 'active' : 'link' }}">

                    <i class="material-icons" style="vertical-align: bottom">add_alert</i>
                    New notice
                </a>
                <p style="color: gray">
                    Settings
                </p>
                <a href="/set-count" class="{{ Request::path() === 'set-count' ? 'active' : 'link' }} btn">
                    <i class="material-icons" style="vertical-align: bottom">access_time</i>
                    Count Down
                </a>
                @if (auth()->user()->roles()->where('name', 'Admin')->first() !== null)
                    <a href="/settings" class="{{ Request::path() === 'settings' ? 'active' : 'link' }} btn">
                        <i class="material-icons" style="vertical-align: bottom">mood</i>
                        User Manage
                    </a>
                @endif
                <a href="/logout" class=" btn link">
                    <i class="material-icons" style="vertical-align: bottom">exit_to_app</i>
                    Logout
                </a>
            </div>
            <div class="col-md-10">
                @yield('body')
            </div>
        </div>
    </div>

</body>

</html>
