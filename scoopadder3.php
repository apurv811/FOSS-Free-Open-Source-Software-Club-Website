<?php
include 'commonhead.php';
require 'conn.php';
$scoop=$_POST['sc'];
$run=mysqli_query($con,"insert into fosscoop values ('','$scoop')");
?>
<div class="container">
Thanks Bitch
</div>