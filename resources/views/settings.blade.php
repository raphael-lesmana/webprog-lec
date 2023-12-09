@extends('include.navbar')

@section('title', 'Edit Profile')

@section('content')
<h1>Settings</h1>

<div class="mb-4 mt-2">
    <form action="/settings" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="col-6 mb-3 mx-auto" style="text-align:left">
            <label for="name" class="form-label" style="color: black; font-size: 20px">
                <div class="card text-black" style="background-color: #CED8BB">Username</div>
            </label>
            <input type="text" class="form-control" name="name" placeholder="Minimum 5 characters" value="{{$user->name}}">
        </div>

        <div class="col-6 mb-3 mx-auto" style="text-align:left">
            <label for="email" class="form-label" style="color: black; font-size: 20px">
                <div class="card text-black" style="background-color: #CED8BB">Email</div>
            </label>
            <input type="email" class="form-control" name="email" placeholder="Must end with '@gmail.com'" value="{{$user->email}}">
        </div>

        <div class="col-6 mb-3 mx-auto" style="text-align:left">
            <label for="phone" class="form-label" style="color: black; font-size: 20px">
                <div class="card text-black" style="background-color: #CED8BB">Phone Number</div>
            </label>
            <input type="text" class="form-control" name="phone" placeholder="Must contain 12 digits" value="{{$user->phone_number}}">
        </div>
        
        <div class="col-6 mb-3 mx-auto" style="text-align:left">
            <label for="address" class="form-label" style="color: black; font-size: 20px">
                <div class="card text-black" style="background-color: #CED8BB">Address</div>
            </label>
            <input type="text" class="form-control" name="address" placeholder="Not mandatory, minimum 5 characters" value="{{$user->address}}">
        </div>

        <div class="col-6 mb-3 mx-auto" style="text-align:left">
            <label for="picture" class="form-label" style="color: black; font-size: 20px">
                <div class="card text-black" style="background-color: #CED8BB">Profile picture</div>
            </label>
            <input type="file" class="form-control" name="picture">
        </div>

        <div class="col-6 mb-3 mx-auto" style="text-align:left">
            <label for="current_password" class="form-label" style="color: black; font-size: 20px">
                <div class="card text-black" style="background-color: #CED8BB">Current Password</div>
            </label>
            <input type="password" class="form-control" name="current_password" placeholder="Has to be the same as the current password">
        </div>

        <div class="col-6 mb-3 mx-auto" style="text-align:left">
            <label for="new_password" class="form-label" style="color: black; font-size: 20px">
                <div class="card text-black" style="background-color: #CED8BB">New Password</div>
            </label>
            <input type="password" class="form-control" name="newpassword" placeholder="5-255 characters">
        </div>

        <div class="col-6 mb-3 mx-auto" style="text-align:left">
            <label for="confirm_password" class="form-label" style="color: black; font-size: 20px">
                <div class="card text-black" style="background-color: #CED8BB">Confirm New Password</div>
            </label>
            <input type="password" class="form-control" name="confirm_password" placeholder="Must be the same as the new password">
        </div>
        
        <div class="col-6 mx-auto" style="text-align:right">
            <button class="btn btn-dark" type="submit" style="color: white; background-color: #528286">Update Profile</button>
        </div>
    </form>
</div>
@endsection