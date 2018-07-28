<?php
include 'commonhead.php';
require 'conn.php';
echo "<div class='container'>";
echo 'Title:<br>';
$ind=$_GET['index'];
$row=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `blog` WHERE `index`='$ind'"));


echo "<b>".$row['title']."</b>";
$k=$row['title'];
?>
<br><img src="images/<?php echo $k?>.jpg"><div class='blog-post-details'>
                                            <div class='blog-post-details-item blog-post-details-item-left user-icon'>
                                                <i class='fa fa-user color-gray-light'></i>
                                                <a href='#'>Admin</a>
                                            </div>
                                            <div class='blog-post-details-item blog-post-details-item-left'>
                                                <i class='fa fa-calendar color-gray-light'></i>
                                                <?php echo $row['time'];?>
                                            </div>
                                        
<br><?php echo $row['data'];

unset($_SESSION['id']);
?>