<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body style="background-color: #C2E7DF">
<nav class="navbar navbar-expand-lg" style="font-weight: bold; background-color: #CED8BB">
        <div class="container-fluid"> 
            <a class="navbar-brand" href="/" style="color: gold; font-weight: bold">
                <img src="/storage/assets/logo.png" alt="" style="height: 50px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                    
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav" style="margin-left:auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/" style="color: black">Home</a>
                    </li>
                    @auth
                    @if (Gate::allows('admin'))
                    <li class="nav-item">
                        <a class="nav-link active" href="/add" style="color: black">Add Items</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link active" href="/wallet" style="color: black">Wallet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/cart" style="color: black">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/history" style="color: black">Transactions</a>
                    </li>
                    @endif

                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false`" style="color: black">
                            Welcome, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink" style="background-color: white">
                            <li><a class="dropdown-item" href="/profile" style="color: black">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/logout" style="color: black">Log Out</a></li>
                        </ul>
                    </li>
                    @endauth
                    @guest
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="/login" style="color: black">Log In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/register" style="color: black">Register</a>
                            </li>
                        </ul>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div style="margin-left: 100px; margin-right: 100px; margin-top: 50px">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>