<?php
require 'conn.php';
include 'commonhead.php';
if(isset($_SESSION['user_id']))
{
$run=mysqli_query($con,"SELECT * FROM `users` where `status`='0'");
echo "<div class='container'>";
echo "<table>";
if( mysqli_num_rows($run )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }
else
		{
			echo "<table><thead><th>Fisrt Name</th><th>Last Name</th><th>Email</th><th>action</th></thead>";
        while( $row = mysqli_fetch_assoc( $run) ){
			echo "<tr><td>{$row['First name']}</td><td>{$row['Last Name']}</td><td>{$row['Email']}</td><td><a href='newapproveid.php?id=".$row['id']."'>approve</a></td></tr>";
	}
}
echo "</table>";
echo "<br><br><br><form action='adminpanel.php' method='get'><input type='submit' value='Go back to admin panel'/></form>";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$row=mysqli_fetch_assoc(mysqli_query($con,"select * from `users` where `id`='$id'"));
	
	$user=$row['username'];
	$pass=$row['pass'];
	$fname=$row['First name'];
	$lname=$row['Last Name'];
	$email=$row['Email'];
	$contact=$row['conatct'];
	$branch=$row['Branch'];
	$sem=$row['sem'];
	$runner=mysqli_query($con,"update `users` set `status`='1' where `id`='$id'");
	
}
}
else{
	
}
?>
