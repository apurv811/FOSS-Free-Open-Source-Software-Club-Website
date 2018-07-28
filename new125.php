<?php 
require 'conn.php';
$row=mysqli_fetch_assoc(mysqli_query($con,"select scoop from fosscoop where id=(select max(id) from fosscoop)"));
echo $row['scoop'];
?>