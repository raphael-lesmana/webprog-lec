@extends('extend.guest')

@section('title', 'Register')
@section('content')
    <h1 class="text-center">Register</h1>
    <form action="/register" method="post">
        @csrf
        <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input id="email" type="email" class="form-control" name="email" required style="width: 400px">
        </div>
        <div class="mb-4">
            <label for="name" class="form-label">Username</label>
            <input id="name" type="text" class="form-control" name="name" required style="width: 400px">
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" class="form-control" name="password" required style="width: 400px">
        </div>
        <div class="mb-4">
            <label for="conPassword" class="form-label">Confirm Password</label>
            <input id="conPassword" type="password" class="form-control" name="conPassword" required style="width: 400px">
        </div>
        <button type="submit" class="btn btn-secondary mb-4" style="width: 400px">Register</button>
        <div class="mb-4" style="text-align: center">
            <p>Already have an account?  <a class="text-decoration-none" style="color: green" href="login">Log in</a></p>
        </div>
    </form>
@endsection