<div>
<div class="container">
<?php
include 'commonhead.php';
require 'conn.php';
if(isset($_GET['index'])) {
$txt= $_GET['index'];
$result = mysqli_query($con,"SELECT * FROM `app_data` where `index`='$txt'");
echo $txt;
while($row = mysqli_fetch_array($result)) 
{ 
echo "<label>Section</label><br>";
echo "<tr>"; 
echo "<td>" . $row['section'] . "</td>" ;
echo"<td> <br>  </td>" ;
echo "<label>Title</label><br>";
echo "<td>". $row['title'] . "</td>"; 
echo "<br><label>Article</label><br>";
echo "<td>" . $row['article'] . "</td>"; 
echo "</tr>"; 
} 
echo "</table>";
}
?>