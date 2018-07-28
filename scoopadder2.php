<?php
include 'commonhead.php';
require 'conn.php';

if($_SESSION['loggedin'])
{
?>
	<div class="container">
<form action="scoopadder3.php" method="post">
<strong>Add scoop
<textarea  name="sc"class="form-control"></textarea>
<br>
<input class="btn-btn-lg" type="submit">
</form>
<?php
}
?>