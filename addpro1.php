<?php

require 'conn.php';
if(isset($_POST['p_name'])&& isset($_POST['p_type'])&& isset($_POST['p_url'])&&isset($_POST['p_tech']) &&isset($_POST['p_leader'])&&isset($_POST['p_info']) &&isset($_POST['team']) &&isset($_POST['p_status']) )
{
	$id=$_SESSION['user_id'];
	$p_name=$_POST['p_name'];
    $p_type=$_POST['p_type'];
    $p_url=$_POST['p_url'];
    $p_tech=$_POST['p_tech'];
    $p_info=$_POST['p_info'];
    $p_team=$_POST['team']; 
	$p_leader=$_POST['p_leader'];
	$p_status=$_POST['p_status'];
	
	
	$que="INSERT INTO `project_data` (`p_id`,`project_name`,`proj_type`,`proj_url`,`proj_tech`,`team_leader`,`p_status`,`p_info`,`team_members`) VALUES ('','$p_name','$p_type','$p_url','$p_tech','$p_leader','$p_status','$p_info','$p_team')";
	$runner1=mysqli_query($con,$que);
	header('location:response1.php');
	
}
else{
	echo "Enter valid data";
}



$info = pathinfo($_FILES['proj_file']['tmp_name']);
$ext = 'jpg'; // get the extension of the file
$newname = $p_name.".".$ext; 
$target = "projectimages/".$newname;
move_uploaded_file( $_FILES['proj_file']['tmp_name'], $target);
mysqli_close($con);





?>