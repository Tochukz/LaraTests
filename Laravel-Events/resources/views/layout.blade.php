<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chap App</title>
    <link rel="stylesheet" href="{!! asset('css/sandstone.bootstrap.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="/">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/events">Events</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="container" style="margin-top: 1em">
        @yield('content')
    </div>
</body>
</html>