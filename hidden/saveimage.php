<?php
//set random name for the image, used time() for uniqueness
$filename =  time() . '.jpg';
$filepath = 'temp/';
move_uploaded_file($_FILES['webcam']['tmp_name'], $filepath.$filename);
$v_photo=$filepath.$filename;
?>
