@extends('include.navbar')

@section('title', 'Edit Profile')

@section('content')

@include('include.error')

<h1 class="text-center" >Settings</h1>

<div class="mb-4 mt-2">
    <form action="/settings" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">

        <div class="col-6 mb-3 mx-auto" style="text-align:left">
            <label for="name" class="form-label" style="color: black; font-size: 20px">Username</label>
            <input type="text" class="form-control" name="name" placeholder="Minimum 5 characters" value="{{$user->name}}">
        </div>

        <div class="col-6 mb-3 mx-auto" style="text-align:left">
            <label for="email" class="form-label" style="color: black; font-size: 20px">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Required" value="{{$user->email}}">
        </div>

        <div class="col-6 mb-3 mx-auto" style="text-align:left">
            <label for="phone" class="form-label" style="color: black; font-size: 20px">Phone Number</label>
            <input type="text" class="form-control" name="phone" placeholder="Must contain 12 digits" value="{{$user->phone_number}}">
        </div>
        
        <div class="col-6 mb-3 mx-auto" style="text-align:left">
            <label for="address" class="form-label" style="color: black; font-size: 20px">Address</label>
            <input type="text" class="form-control" name="address" placeholder="Not mandatory, minimum 5 characters" value="{{$user->address}}">
        </div>

        <div class="col-6 mb-3 mx-auto" style="text-align:left">
            <label for="picture" class="form-label" style="color: black; font-size: 20px">Profile Picture</label>
            <input type="file" class="form-control" name="picture" value="{{ $user->picture }}">
        </div>

        <div class="col-6 mb-3 mx-auto" style="text-align:left">
            <label for="curpassword" class="form-label" style="color: black; font-size: 20px">Current Password</label>
            <input type="password" class="form-control" name="curpassword" placeholder="Has to be the same as the current password">
        </div>

        <div class="col-6 mb-3 mx-auto" style="text-align:left">
            <label for="newpassword" class="form-label" style="color: black; font-size: 20px">New Password</label>
            <input type="password" class="form-control" name="newpassword" placeholder="5-255 characters">
        </div>

        <div class="col-6 mb-3 mx-auto" style="text-align:left">
            <label for="conpassword" class="form-label" style="color: black; font-size: 20px">Confirm New Password</label>
            <input type="password" class="form-control" name="conpassword" placeholder="Must be the same as the new password">
        </div>
        
        <div class="col-6 mx-auto" style="text-align:right">
            <button class="btn btn-secondary" type="submit" style="color: white; background-color: #528286">Update Profile</button>
        </div>
    </form>
</div>
@endsection