<?php
$short=$_POST['short'];
$long=$_POST['long'];
if($short!=null && $long!=null)
{
require 'conn.php';
mysqli_query($con,"insert into `forum` values ('','$short','$long')");
header("location:openforums.php");
}
else
{
	header("location:addquestion.php");
}
?>