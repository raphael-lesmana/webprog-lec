<h1>Settings</h1>

<form action="/settings" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
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