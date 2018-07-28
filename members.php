<?php include 'commonhead.php';
require 'conn.php';
$run=mysqli_query($con,'select * from `hoax`.`project_data`');
echo "<div id='content'>
<div class='container'>
<div id='content' >
                        <div class='container'>";
while($row=mysqli_fetch_assoc($run))
{
?>
                            
                                <!-- Main Column -->
                                <div style='border:1px solid; width:300px; height:400px; float:left;'>
                                    
                                    
                                        
                                        <div class='blog-item-header'>
                                            <!-- Title -->
                                            <h4>
                                                
                                                    <?php echo $row['project_name'];?>
                                            </h4>
                                            <div class='clearfix'></div>
                                            <!-- End Title -->
                                        </div>
                                       
                                        
                                        
                                          <?php $path="projectimages/".$row['project_name'].".jpg";  ?>  
                                        <!-- End project Item Details -->
                                        <!-- project Item Body -->
                                        <div class='blog '>
                                            <div class='clearfix'></div>
                                            <div class='blog-post-body'>
                                                <div >
                                                <img src="<?php echo $path;?>" height="200px" width="200px" alt='thumb1'>
                                                <?php echo "<h4>Project Technology:" .$row['proj_tech']."</h4>"; ?>
                                                <?php echo "<h4>Project Status:" .$row['p_status']."</h4>"; ?>
                                                <?php echo "<h4>Project Url:" .$row['proj_url']."</h4>"; ?>
                                                
                                                </div>
                                             </div>
                                        </div>
                                    </div>
</div>
                                    <br>
                                       
                                            
                                    

<br>
<br>
<?php } ?>


<br>
<br>