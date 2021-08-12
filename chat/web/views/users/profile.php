<div>
   <h5>
        Personal Info
    </h5>
    <form method="post">
        <input type="text" name="first_name" class="form-control mt-2" placeholder="First Name">
        <input type="text" name="last_name" class="form-control mt-2" placeholder="Last Name">
        <input type="date" name="birthday" class="form-control mt-2" placeholder="Birthday">
        <h5 class="mt-5">
            Change password
        </h5>
        <input type="password" name="current_password" class="form-control mt-2" placeholder="Current password">
        <input type="password" name="new_password" class="form-control mt-2" placeholder="New password">
        <input type="password" name="repeat_new_password" class="form-control mt-2" placeholder="Repeat new password">

        <input type="submit" value="Send" class="btn btn-success mt-2">
    </form>
</div>
<div class="mt-5">
    <h5>
        Upload avatar
    </h5>
    <form method="post" enctype="multipart/form-data">
        <input id="upload-avatar" type="file" class="form-control mt-2" name="avatar">
        <input type="submit" value="Upload avatar" class="btn btn-success mt-2">
    </form>
</div>