<?php
include 'commonhead.php';
if(isset($_SESSION['user_id']))
{
require 'conn.php';
if(isset($_POST['title'])&&isset($_POST['time'])&&isset($_POST['description']))
{
	$title=$_POST['title'];
	$desc=$_POST['description'];
	$time=$_POST['time'];
	mysqli_query($con,"INSERT INTO `hoax`.`activity`(`title`,`description`,`time`) VALUES ('$title','$desc','$time')");
}

?>

				<div class="container">
				<form action='addact.php' method="POST">
				<label>Title</label>
				<input type="text" class="form-control margin-bottom-20" name="title">
				<label>Time and date</label>
				
				<input type="text" class="form-control margin-bottom-20" name="time">
				<label>Description</label>
				
				<textarea class="form-control margin-bottom-20" rows="30" cols="30" name="description"></textarea>
				<input type="submit" value="submit" class="btn btn-primary">
				</form>
				<?php
}
else{
	header("location:indexee.php");
	
}?>