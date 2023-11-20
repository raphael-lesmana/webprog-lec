<h1>Settings</h1>

<form action="/settings" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <label for="name">Username</label>
    <input type="text" name="name" placeholder="Minimum 5 characters"> <br>
    <label for="email">Email</label>
    <input type="text" name="email" placeholder="Must end with '@@gmail.com'"> <br>
    <label for="phone">Phone Number</label>
    <input type="text" name="phone" placeholder="Must contain 12 digits"> <br>
    <label for="address">Address</label>
    <input type="text" name="address" placeholder="Not mandatory, minimum 5 characters"> <br>
    <label for="picture">Profile picture</label>
    <input type="file" name="picture"><br>
    <label for="newpassword">New Password</label>
    <input type="password" name="newpassword" placeholder="5-255 characters"> <br>
    <label for="conpassword">Confirm Password</label>
    <input type="password" name="conpassword" placeholder=""> <br>
    <label for="curpassword">Current Password</label>
    <input type="password" name="curpassword" placeholder="Has to be the same as the current password"> <br>
    <button>Save</button>
</form>