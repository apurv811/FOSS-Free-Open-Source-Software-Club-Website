<?php
include 'commonhead.php';
?>
<div class="container">
<div id="primary-container">
<form action="blogadder1.php" method="post" enctype="multipart/form-data">
Enter event title<br>
<input type="text" name="title" class="form-control"><br>
Enter description<br>
<textarea  rows="50" cols="200" name="data" class="form-control"> </textarea><br>
Images<strong>:<br>
<input type="file" name="userFile"><br>
<input type="submit">
</form>
</div>
</div>