<?php

require 'conn.php';

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$area=$_POST['info'];
	$cont=$_POST['contact'];
	$ema=$_POST['email'];
	$run=mysqli_query($con,"INSERT INTO `hoax`.`team`(`index`,`name`,`area`,`email`,`contact`) VALUES (NULL,'$name','$area','$ema','$cont')");
	
	$name_of_uploaded_file = basename($_FILES['uploaded_file']['name']);
	$type_of_uploaded_file =substr($name_of_uploaded_file,strrpos($name_of_uploaded_file, '.') + 1);
 
	$size_of_uploaded_file = $_FILES["uploaded_file"]["size"]/1024;	
	$max_allowed_file_size = 10000; // size in KB
$allowed_extensions = array("jpg");
if($size_of_uploaded_file > $max_allowed_file_size )
{
  $errors .= "\n Size of file should be less than $max_allowed_file_size";
}
 
//------ Validate the file extension -----
$allowed_ext = false;
for($i=0; $i<sizeof($allowed_extensions); $i++)
{
  if(strcasecmp($allowed_extensions[$i],$type_of_uploaded_file) == 0)
  {
    $allowed_ext = true;
  }
}
 
if(!$allowed_ext)
{
  $errors= "\n The uploaded file is not supported file type. ".
  " Only the following file types are supported: ".implode(',',$allowed_extensions);
}
$upload_folder="team".$name.".jpg";
$path_of_uploaded_file = $upload_folder;
$tmp_path=$_FILES['uploaded_file']['tmp_name'];
 
if(is_uploaded_file($tmp_path))
{
  if(!copy($tmp_path,$path_of_uploaded_file))
  {
    $errors= '\n error while copying the uploaded file';
  }
}
header("location:response.php");

}
else
{
	echo"suuuuu";
}
include 'commonhead.php';
?>

					<div id="container">
						<form action="addteam.php" method="POST" enctype="multipart/form-data">
						<label> Name </label>
						<input type="text" class="form-control margin-bottom-20" name='name'>
						<label>Image</label>
						<input type="file" name='uploaded_file'>
						<label>Area of intrest</label>
						<input type="text" name='info' class="form-control margin-bottom-20">
						
						<label>Contact no.</label>
						<input type="text" name="contact" class="form-control margin-bottom-20">
						<input type="submit" class="btn btn-primary" name="submit">
						</form>
						</div>
</body>