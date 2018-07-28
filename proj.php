<?php include 'commonhead.php';
require 'conn.php';
$run=mysqli_query($con,'select * from `hoax`.`project_data`');
echo "<div id='content'>
<div class='container'>
<div id='content'>
                        <div class='container'>";
while($row=mysqli_fetch_assoc($run))
{
?>
                            
                                <!-- Main Column -->
                                <div class='col-md-12'>
                                    
                                    <div class='blog-post'>
                                        
                                        <div class='blog-item-header'>
                                            <!-- Title -->
                                            <h2>
                                                
                                                    <?php echo $row['project_name'];?>
                                            </h2>
                                            <div class='clearfix'></div>
                                            <!-- End Title -->
                                        </div>
                                       
                                        <div class='blog-post-details' class='col-md-12' >
                                            <!-- Type -->
                                            <div class='blog-post-details-item blog-post-details-item-left'>
                                                <i class='color-gray-light'></i>
                                                <?php echo "<h4>Project Type: ".$row['proj_type']."</h4>"; ?>
                                            </div>
                                            <!-- End Type -->
                                            <!-- Url -->
                                            <div class='blog-post-details-item blog-post-details-item-left'>
                                                <i class='color-gray-light'></i>
                                                <?php echo "<h4>Project Url:" .$row['proj_url']."</h4>"; ?>
                                            </div>
                                            <!-- End Url -->
                                            <!-- Technology-->
                                            <div class='blog-post-details-item blog-post-details-item-left'>
                                                <i class='color-gray-light'></i>
                                                <?php echo "<h4>Project Technology:" .$row['proj_tech']."</h4>"; ?>
                                            </div>
                                            <!-- End Technology -->
                                            <!-- Status-->
                                            <div class='blog-post-details-item blog-post-details-item-left'>
                                                <i class='color-gray-light'></i>
                                                <?php echo "<h4>Project Status:" .$row['p_status']."</h4>"; ?>
                                            </div>
                                            <!-- End Status -->
                                        </div>
                                        
                                          <?php $path="projectimages/".$row['project_name'].".jpg";  ?>  
                                        <!-- End project Item Details -->
                                        <!-- project Item Body -->
                                        <div class='blog'>
                                            <div class='clearfix'></div>
                                            <div class='blog-post-body'>
                                                <div class='col-md-6'>
                                                <img src="<?php echo $path;?>" height="300px" width="350px" alt='thumb1'>
                                                </div>
                                                <div class='col-md-6'>
                                                    <p><?php  echo "<h4>".$row['p_info']."</h4>";?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
</div>
                                    <br>
                                    <div>
                                        <div class='blog-post-details'>
                                            <!-- Members -->
                                            <div class='blog-post-details-item blog-post-details-item-left'>
                                                <i class='fa fa-user fa fa-user color-gray-light'></i>
                                                <?php echo "<h3>Project Members: ".$row['team_leader'].", ".$row['team_members']."</h3>"; ?>
                                            </div>
                                            <!-- End Members-->
                                         </div>
                                    </div>     
                                            
                                    <br>

<br>
<br>
<?php } ?>
</div>
</div>
</div>

<br>
<br>
<br>
<br>