<?php
if (!empty($_FILES)) {
    $tmpFile = $_FILES['file']['tmp_name'];

    $filename = time();
    $save_path = '../../uploads/'.$filename;
    move_uploaded_file($tmpFile, $save_path);
}

die(json_encode($filename));
