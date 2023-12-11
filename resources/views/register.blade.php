@extends('extend.guest')

@section('title', 'Register')
@section('content')
    <h1 class="text-center">Register</h1>
    <form action="/register" method="post">
        @csrf
        <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input id="email" type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-4">
            <label for="name" class="form-label">Username</label>
            <input id="name" type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>
        <div class="mb-4">
            <label for="conPassword" class="form-label">Confirm Password</label>
            <input id="conPassword" type="password" class="form-control" name="conPassword" required>
        </div>
        <div class="d-flex justify-content-center" style="padding-bottom: 10px">
            <button type="submit" class="btn btn-secondary mt-2 mb-2" style="background-color: #528286">Register</button>
        </div>
        <div class="mb-4" style="text-align: center">
            <p>Already have an account?  <a class="text-decoration-none" style="color: #528286" href="login">Log in</a></p>
        </div>
    </form>
@endsection