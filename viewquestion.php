<?php
include 'commonhead.php';
require 'conn.php';
$k=$_GET['id'];

$run=mysqli_query($con,"select * from `forum` where `id`='$k'");
$row=mysqli_fetch_assoc($run);
$data=$row['data'];
$ques=$row['title'];
?>
<div class="container">
<div id="primary-container primary-container-background">
Question:<?php echo $ques;?><br>
<br><strong>
Detailed description:<?php echo $data;?><br>
Answers by users:<br></strong>
<?php
$run1=mysqli_query($con,"select * from `comment_forum` where `id`='$k'");
if(mysqli_num_rows($run1)==0)
{
	
}
else
{
	while($row1=mysqli_fetch_assoc($run1))
	{
		echo "<strong>".$row1['author'].":</strong><br>";
	echo "<span>".$row1['comment']."</span><hr>";
}}
?>

<form action="commentadder.php?id=<?php echo $k;?>" method="post">
Add an explaination here:<br><textarea class="form-control" name="tarea" rows="10" cols="100"></textarea>
<input type="submit">
</form>
</div>