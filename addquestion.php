<?php
include 'commonhead.php';
require 'conn.php';
?>
<body>
<div id="container">
<div id="primary-container">
<center>
<form action="questionadder.php" method="post">
Enter Your Question(Short description) Here:
<br><input type="text" name="short" class="form-control margin-bottom-20">
<br>
Enter detailed summary for your question:
<br><input type="text" name="long" class="form-control margin-bottom-20">
<br>
<br>
<input type="submit" class="btn-lg">
</form>
</div>
</div>
</body>