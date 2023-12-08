@extends('extend.guest')

@section('title', 'Log in | Mediklik')
@section('content')
    <h1 class="text-center">Login</h1>
    <form action="/login" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" type="email" class="form-control" placeholder="" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" class="form-control" placeholder="" name="password" required >
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" style="width: 18px; height:18px" id="rememberMe" class="form-check-input" name="remember">
            <label for="rememberMe" class="form-check-label">Remember Me</label>
        </div>
        <button type="sub`mit" class="btn btn-secondary mb-4">Login</button>
        <div class="mb-4" style="">
            <p class="text-center">Don't have an account?  <a class="text-decoration-none" style="color: green" href="register">Sign up</a></p>
        </div>
    </form>
@endsection
