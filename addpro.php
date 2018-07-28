<?php
include 'commonhead.php';
if(isset($_SESSION['user_id']))
{
?>
<html>
                  
<br>
<br>		
 <div class="col-md-6 col-md-offset-3 col-sm-offset-3">

<form action="addpro1.php" method="POST" enctype="multipart/form-data">
	<label>Project Name:</label>             			
		<input type="text" name="p_name" class="form-control margin-bottom-20" required> 
        
         <label>Project Type:</label>             			
		<input type="text" name="p_type" class="form-control margin-bottom-20" required>

        <label>Project URL:</label>             			
		<input type="text" name="p_url" class="form-control margin-bottom-20" required>

        <label>Project Technology:</label>             			
		<input type="text" name="p_tech" class="form-control margin-bottom-20" required>                                 

	<label>Team Leader:</label>
		<input type="text" name="p_leader" class="form-control margin-bottom-20" required>
        
	<label>Project Status: </label>
		<select name="p_status" class="form-control margin-bottom-20">
					<option value="Starting">Starting</option>
					<option value="Ongoing">Ongoing</option>
					<option value="Completed">Completed</option>
			</select>

        <label>Image:</label>             			
		<input type="file" name="proj_file" class="form-control margin-bottom-20" required>  

        <label>Project Information:</label>             			
		<input type="textarea" name="p_info" class="form-control margin-bottom-20" required>  

        <label>Team Members:</label>             			
		<input type="textarea" name="team" class="form-control margin-bottom-20" required>    

  
	<p><button data-ftrans="slide" type="submit" class="btn btn-primary">Submit</button>

</div>
</div>
</div>
</div>
</form>
</html>
<?php
}
else{
	header("location:indexee.php");
}