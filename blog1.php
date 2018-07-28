<?php include 'commonhead.php';
require 'conn.php';
$run=mysqli_query($con,'select * from `hoax`.`blog`');
echo "<div id='content'>
<div class='container'>
<div id='content'>
                        <div class='container'>";
while($row=mysqli_fetch_assoc($run))
{
	$_SESSION['id']=$row['index'];
?>
                            
                                <!-- Main Column -->
                                <div class='col-md-9'>
                                    <!-- Blog Post -->
                                    <div class='blog-post'>
                                        <!-- Blog Item Header -->
                                        <div class='blog-item-header'>
                                            <!-- Title -->
                                            <h2>
                                                
                                                    <?php echo $row['title'];?>
                                            </h2>
                                            <div class='clearfix'></div>
                                            <!-- End Title -->
                                        </div>
                                        <!-- End Blog Item Header -->
                                        <!-- Blog Item Details -->
                                        <div class='blog-post-details'>
                                            <!-- Author Name -->
                                            <div class='blog-post-details-item blog-post-details-item-left'>
                                                <i class='fa fa-user color-gray-light'></i>
                                                <a href='#'>Admin</a>
                                            </div>
                                            <!-- End Author Name -->
                                            <!-- Date -->
                                            <div class='blog-post-details-item blog-post-details-item-left'>
                                                <i class='fa fa-calendar color-gray-light'></i>
                                                <?php echo $row['time']; ?>
                                            </div>
                                            <!-- End Date -->
										
                                          <?php $path="images/".$row['title'].".jpg";  ?> 
                                        </div>
                                        <!-- End Blog Item Details -->
                                        <!-- Blog Item Body -->
                                        <div class='blog'>
                                            <div class='clearfix'></div>
                                            <div class='blog-post-body'>
                                                <div class='col-md-5'>
												<img src="<?php echo $path;?>" height="150px" width="150px" alt='thumb1'>
                                                </div>
                                                <div class='col-md-7'>
                                                    <p><!-- Read More -->
                                                    <a href="viewfull.php?index=<?php echo $row['index'];?>" class='btn btn-primary'>
                                                        Read More
                                                        <i class='icon-chevron-right readmore-icon'></i>
                                                    </a>
                                                    <!-- End Read More -->
                                                </div>
                                            </div>
</div></div></div><?php } ?>