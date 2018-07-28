<?php 
if($_POST['tarea']!=null)
{
	$k=$_GET['id'];
	require 'conn.php';
	$com=$_POST['tarea'];
	if(isset($_SESSION['loggedin']))
	{
		$l=$_SESSION['user_id'];
		$run=mysqli_query($con,"select `username` from `users` where `id`='$l'");
		$row=mysqli_fetch_assoc($run);
		$auth=$row['username'];
		mysqli_query($con,"insert into `comment_forum` values ('$k','$com','$auth')");
	
	header("location:viewquestion.php?id=".$k);
	}
	else{
		include 'commonhead.php';
		echo "<body><div id='container'><div id='primary-container-background'><center>	<h3><strong>Please login to add a comment</strong></h3></center></div>";
	}
}
?>
