<?php include 'commonhead.php';
require 'conn.php';
$ti=$_POST['title'];
$data=$_POST['data'];
$info = pathinfo($_FILES['userFile']['tmp_name']);
$ext = 'jpg'; // get the extension of the file
$newname = $ti.".".$ext; 
$target = 'images\\'.$newname;
move_uploaded_file( $_FILES['userFile']['tmp_name'], $target);
$run=mysqli_query($con,"INSERT INTO `hoax`.`blog`(`title`,`data`) VALUES ('$ti','$data')");
?>
<div class="container">
Blog successfully added.</div>