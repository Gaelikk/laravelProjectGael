<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titol')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-warning">
    <div class="container-fluid ">
        <a class="navbar-brand text-left" href="{{ url('/') }}">Escape Room Caraballo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" aria-current="page" href={{url('/gameList')}}>Jocs</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href={{url('/bookList')}}>Reserves</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href={{url('/roomList')}}>Habitacions</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href={{url('/userList')}}>Usuaris</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href={{url('/account')}}>Compte</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href={{url('/login')}}>Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
