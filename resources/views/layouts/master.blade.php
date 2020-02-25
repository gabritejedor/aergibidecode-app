<!doctype html>
<html class="h-100" lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <title>@yield('title')</title>
</head>
<body class="h-100">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<header>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <form class="form-inline">
                @csrf
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar tema" aria-label="Buscar" name="buscar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
            <ul class="nav navbar-nav ml-auto">
                @if(!Auth::check())
                <li>
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <input type="submit" name="login" value="Login">
                </form>
                </li>
                <li class="nav-item"><a class="nav-link" href="register">Registrar</a></li>
                    @else
                    <form method="post" action="{{ route('logout') }}">
                        @csrf

                        <input type="submit" name="logout" value="Logout">
                    </form>
                    @endif
            </ul>
        </div>

    </nav>

</header>
<div class="container-fluid h-100">
    <div class="row h-100">
        <div class="col-md-1  width m-0 p-0" style="background-color:#8F9CA8;">
            <ul class="nav flex-column navbar-dark sticky-top text-center">
                <li class="nav-item">
                    <a class="nav-link btn btn-light m-3" href="#">PHP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light m-3" href="#">JAVA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light m-3" href="#">C#</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light m-3" href="#">JS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light m-3" href="#">HTML</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light m-3" href="#">CSS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light m-3" href="#">SQL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light m-3" href="#">PYTHON</a>
                </li>

            </ul>
        </div>
        <div class="col col-md-9">

                @yield('content')

        </div>
        <div class="col-md-2  width m-0 p-0" style="background-color:#8F9CA8;" >

        </div>

    </div>
</div>
</div>

</body>
</html>
