<?php

$k=$_POST['username'];
$l=$_POST['password'];
require 'conn.php';
if(isset($_POST['username'])&&isset($_POST['password']))
{
	
	$user=$_POST['username'];
	$pwd=$_POST['password'];
	if(!empty($user)&&!empty($pwd))
	{
			$run=mysqli_query($con,"select * from `users` where `username`='$user'");
			if($run)
			{
				$row=mysqli_fetch_assoc($run);
				if($pwd==$row['pass'])
				{
					if($row['status']==1)
					{
						session_start();
						$_SESSION['loggedin']=true;
						$_SESSION['user_id']=$row['id'];
						header("location:scoopadder2.php");
					}
else
{
	header("location:scoopadder.php");
	
}
}}}}
?>