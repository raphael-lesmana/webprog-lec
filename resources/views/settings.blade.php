@extends('include.navbar')

@section('title', 'Edit Profile')

@section('content')
<h1>Settings</h1>

<div>
    <form action="/settings" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="col-4 mb-3 mx-auto" style="text-align:left">
            <label for="name" class="form-label" style="color: black; font-size: 20px">
                <div class="card text-black" style="background-color: black">Username</div>
            </label>
            <input type="text" class="form-control" name="name" placeholder="Minimum 5 characters" value="{{$user->name}}">
        </div>

        <div class="col-4 mb-3 mx-auto" style="text-align:left">
            <label for="email" class="form-label" style="color: black; font-size: 20px">
                <div class="card text-black" style="background-color: black">Email</div>
            </label>
            <input type="email" class="form-control" name="email" placeholder="Must end with '@gmail.com'" value="{{$user->email}}">
        </div>

        <div class="col-4 mb-3 mx-auto" style="text-align:left">
            <label for="phone" class="form-label" style="color: black; font-size: 20px">
                <div class="card text-black" style="background-color: black">Phone Number</div>
            </label>
            <input type="text" class="form-control" name="phone" placeholder="Must contain 12 digits" value="{{$user->phone_number}}">
        </div>
        
        <div class="col-4 mb-3 mx-auto" style="text-align:left">
            <label for="address" class="form-label" style="color: black; font-size: 20px">
                <div class="card text-black" style="background-color: black">Address</div>
            </label>
            <input type="text" class="form-control" name="address" placeholder="Not mandatory, minimum 5 characters" value="{{$user->address}}">
        </div>

        <div class="col-4 mb-3 mx-auto" style="text-align:left">
            <label for="picture" class="form-label" style="color: black; font-size: 20px">
                <div class="card text-black" style="background-color: black">Profile picture</div>
            </label>
            <input type="file" class="form-control" name="picture">
        </div>

        <div class="col-4 mb-3 mx-auto" style="text-align:left">
            <label for="current_password" class="form-label" style="color: black; font-size: 20px">
                <div class="card text-black" style="background-color: black">Current Password</div>
            </label>
            <input type="password" class="form-control" name="current_password" placeholder="Has to be the same as the current password">
        </div>

        <div class="col-4 mb-3 mx-auto" style="text-align:left">
            <label for="new_password" class="form-label" style="color: black; font-size: 20px">
                <div class="card text-black" style="background-color: black">New Password</div>
            </label>
            <input type="password" class="form-control" name="newpassword" placeholder="5-255 characters">
        </div>

        <div class="col-4 mb-3 mx-auto" style="text-align:left">
            <label for="confirm_password" class="form-label" style="color: black; font-size: 20px">
                <div class="card text-black" style="background-color: black">Confirm New Password</div>
            </label>
            <input type="password" class="form-control" name="confirm_password" placeholder="Must be the same as the new password">
        </div>
        
        <div class="col-4 mx-auto" style="text-align:right">
            <button class="btn btn-dark" type="submit" style="color: black; background-color: black">Update Profile</button>
        </div>
    </form>
</div>

    <label for="name">Username</label>
    <input type="text" name="name" placeholder="""> <br>
    <label for="email">Email</label>
    <input type="text" name="email" placeholder=""> <br>
    <label for="phone">Phone Number</label>
    <input type="text" name="phone" placeholder=""> <br>
    <label for="address">Address</label>
    <input type="text" name="address" placeholder=""> <br>
    <label for="picture">Profile picture</label>
    <input type="file" name="picture"><br>
    <label for="newpassword">New Password</label>
    <input type="password" name="newpassword" placeholder=""> <br>
    <label for="conpassword">Confirm Password</label>
    <input type="password" name="conpassword" placeholder=""> <br>
    <label for="curpassword">Current Password</label>
    <input type="password" name="curpassword" placeholder=""> <br>
    <button>Save</button>
</form>

@endsection