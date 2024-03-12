<?php

if (isset($_FILES['image']))
{
    $file_name=$_FILES['image']['name'];
$file_tmp=$_FILES['image']['tmp_name'];

    move_uploaded_file($file_tmp,"PROFILES/".$file_name);
}
?>