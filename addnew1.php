<?php

require 'conn.php';
if(isset($_POST['lang'])&&isset($_POST['title'])&&isset($_POST['article']))
{
	$id=$_SESSION['user_id'];
	$section=$_POST['lang'];
	$title=$_POST['title'];
	$article=$_POST['article'];
	$que2="SELECT `username` from `users` WHERE `id`='$id'";
	$runner2=mysqli_query($con,$que2);
	
	$datar=mysqli_fetch_assoc($runner2);
	$auth=$datar['username'];
	
	$que="INSERT INTO `data` (`index`,`section`,`title`,`article`,`author`) VALUES ('','$section','$title','$article','$auth')";
	$runner1=mysqli_query($con,$que);
	header('location:response1.php');
	
}
else{
	echo "Enter valid data";
}

mysqli_close($con);





?>