<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <ul>
        <li><a href="/">Home</a></li>
        @guest
            <li><a href="/login">Log In</a></li>
            <li><a href="/register">Register</a></li>
        @endguest
        @auth
            @if (Gate::allows('admin'))
            <li><a href="/add">Add Items</a></li>
       `     @else
            <li><a href="/cart">My Cart</a></li>
            <li><a href="/history">My Transactions</a></li>
            <li><a href="/wallet">Wallet</a></li>
            <li><a href="/profile">My Profile</a></li>
            @endif
            <li><a href="/logout">Log Out</a></li>
        @endauth
    </ul>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>