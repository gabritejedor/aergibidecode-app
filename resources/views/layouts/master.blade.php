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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('js/script.js') }}"></script>



<header>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">
            <a class="mx-5" href="/"><img width="100" height="100" src="/imagen/logo.png"/></a>
            <form metoh="get" action="/search" class="form-inline">
                @csrf
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar tema" aria-label="Buscar" name="buscar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
            <a href= "/viewaddpregunta" class="btn btn-outline-success mx-5 my-sm-0">Pregunta nueva</a>
            <div class="nav navbar-nav ml-auto">
                @if(!Auth::check())

                <form class="form-inline" method="post" action="{{ route('login') }}">
                    @csrf
                    <input placeholder="email"  id="email" type="email" class="form-control mx-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <input placeholder="password" id="password" type="password" class="form-control mx-1 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <input class="btn btn-outline-success  mx-1 my-2 my-sm-0" type="submit" name="login" value="Login">
                </form>

                <div class="nav-item"><a class="btn btn-outline-success mx-1 my-2 my-sm-0" href="register">Registrar</a></div>
                    @else
                    <a href="/perfil"> <img width="50" height="50" class="img-thumbnail " src="{{Auth()->user()->imagen}}" alt="User"></a>
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                    <input class="btn btn-outline-success  mx-3 my-2 my-sm-0"  type="submit" name="logout" value="Logout">
                    </form>
                    @endif
            </div>
        </div>

    </nav>

</header>
<div class="container-fluid h-100">
    <div class="row h-100">
        <div class="col-md-1  width m-0 p-0" style="background-color:#8F9CA8;">
            <ul class="nav flex-column navbar-dark sticky-top text-center">
                <li class="nav-item">
                    <a class="nav-link btn btn-light m-3" href="/categoria/php">PHP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light m-3" href="/categoria/java">JAVA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light m-3" href="/categoria/c">C#</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light m-3" href="/categoria/js">JS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light m-3" href="/categoria/html">HTML</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light m-3" href="/categoria/css">CSS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light m-3" href="/categoria/sql">SQL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light m-3" href="/categoria/python">PYTHON</a>
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
