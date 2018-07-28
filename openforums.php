<?php
include 'commonhead.php';
?>
<body>
<div class="container">
<div id="primary-container primary-container-background">
<?php
require 'conn.php';
$run=mysqli_query($con,"select * from `forum`");
echo "<table>";
	
while($row=mysqli_fetch_assoc($run))
{
	echo"<tr><td width='700px'>".$row['title']."</td><td><a href='viewquestion.php?id=".$row['id']."'>View discussion</a></td></tr>";
	
}

?>
<br>
<br>
<br><br>
</div>
</div>
</body>