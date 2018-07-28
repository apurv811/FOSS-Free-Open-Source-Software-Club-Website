<?php
require 'conn.php';
if(isset($_POST['username'])&&isset($_POST['password']))
{
	
	$user=$_POST['username'];
	$passwd=$_POST['password'];
	$pwd=md5("$passwd");
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
						header("location:profile.php");
					}
					else if($row['status']==2)
					{
						session_start();
						$_SESSION['admin']="hello";
						$_SESSION['user_id']=$row['id'];
						header("location:adminpro.php");
					}
					else{
						header("location:indexee.php");
					}
				}
				else{
					header("location:indexee.php");
				}
			}
			else
			{
				header("location:indexee.php");
			}
	}
}
	?>