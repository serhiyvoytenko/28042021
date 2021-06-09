<?php

var_dump($_POST);
$dirname = $_POST['dir_name'] ?? null;
if (!$dirname){
    header('Location: ../index.php?error_message=Directory name is required');
}