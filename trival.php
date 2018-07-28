<?php

$info = pathinfo($_FILES['userFile']['tmp_name']);
$ext = 'jpg'; // get the extension of the file
$newname = "jumani.".$ext; 
$target = 'profileimages/'.$newname;
move_uploaded_file($_FILES['userFile']['tmp_name'], $target);

?>