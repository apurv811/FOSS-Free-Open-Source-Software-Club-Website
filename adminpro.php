<?php
require 'conn.php';
include 'commonhead.php';
if(isset($_SESSION['admin']))
{
	
if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
{

	$hj=$_SESSION['user_id'];
	$quer="SELECT * from `users` where `id`='$hj'";
	
	$run=mysqli_query($con,$quer);
	$us=mysqli_fetch_assoc($run);
	$us1=$us['username'];
	$us2=$us['Email'];
	$k="profileimages/".$us1.".jpg";
	$us3=$us['sem'];
	$us4=$us['Branch'];

}

	?>

                        <div class="container">
                            <div class="row margin-vert-30">
                                <div class="col-md-12">
                                    <h2>Welcome</h2>
                                    <div class="row">
                                        <div class="col-md-6 animate fadeIn">
                                            <img src="<?php echo $k;?>" alt="about-me" class="margin-top-10">
                                            <ul class="list-inline about-me-icons margin-vert-20">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-border fa-linkedin"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-border fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa-lg fa-border fa-dribbble"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="www.google.com">
                                                        <i class="fa-lg fa-border fa-google-plus"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 margin-bottom-10 animate fadeInRight">
                                            <h3 class="padding-top-10 pull-left"><?php echo $us1;?>
                                                
                                            </h3>
                                            <div class="clearfix"></div>        
                                            <h4>
                                                <em>Email:<?php echo $us2;?></em>
                                            
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row animate fadeInUp">
                                        <h2 class="text-center margin-top-10">Welcome to FOSS LDCE</h2>
                                        <p class="text-center margin-bottom-30"> Welcome to the contributor's portal for foss ldce.</p>
                                    </div>
                                    <hr class="margin-bottom-40">
                                    <div class="row">
                                        <div class="col-md-6 animate fadeIn">
                   

				<h2>Add new documentation</h2>
			<p>Add a new documentation of you language. To add a new article about it click below.<br><br></p>
			<a href="addnew.php" class="btn btn-primary pull-right">Add new documentation</a> </div>

				<h2>View documentations</h2>
			<p>View submitted documentations table and read submitted documentations.To view click below</p>
			<a href="view.php" class="btn btn-primary pull-right">View documentation</a> </div>
			<br>
			<h2>
			Admin Panel</h2>
			<a href="adminpanel.php" class="btn btn-primary pull-left">Go to admin Panel</a>
			
		</div>
	</div>
</body>
</html>
<?php
}
else{
	header("location:indexee.php");
}?>