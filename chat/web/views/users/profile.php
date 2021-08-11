<?php

if (isset($_FILES['avatar'])) {
//    var_dump($_FILES);exit();
    $avatarsDir = __DIR__.'/../../public/images/avatars/';
    $type = strstr($_FILES['avatar']['type'],'/');
    $type = str_replace('/', '.',$type);
    var_dump($type);
    move_uploaded_file($_FILES['avatar']['tmp_name'], $avatarsDir.'name'.$type);
}

?>

<form method="post" enctype="multipart/form-data">
    <input type="file" class="form-control mb-3" name="avatar">
    <input type="submit" value="Send" class="btn btn-success">
</form>