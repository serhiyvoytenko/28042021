<div>
   <h6>
        Personal Info
    </h6>
    <form method="post">
        <input type="text" name="first_name" class="form-control form-control-sm mt-2" placeholder="First Name">
        <input type="text" name="last_name" class="form-control form-control-sm mt-2" placeholder="Last Name">
        <input type="date" name="birthday" class="form-control form-control-sm mt-2" placeholder="Birthday">
        <h6 class="mt-5">
            Change password
        </h6>
        <input type="password" name="current_password" class="form-control form-control-sm mt-2" placeholder="Current password">
        <input type="password" name="new_password" class="form-control form-control-sm mt-2" placeholder="New password">
        <input type="password" name="repeat_new_password" class="form-control form-control-sm mt-2" placeholder="Repeat new password">

        <input type="submit" value="Send" class="btn btn-sm btn-success mt-2 col-sm-2">
    </form>
</div>
<div class="mt-5">
    <h6>
        Upload avatar
    </h6>
    <form method="post" enctype="multipart/form-data">
        <input id="upload-avatar" type="file" class="form-control form-control-sm mt-2" name="avatar">
        <input type="submit" value="Upload avatar" class="col-sm-2 btn btn-sm btn-success mt-2">
    </form>
</div>