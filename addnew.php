<?php
include 'commonhead.php';
if(isset($_SESSION['user_id']))
{
?>
<html>
                  
<br>
<br>					
					                                    <div class="col-md-6 col-md-offset-3 col-sm-offset-3">

																	<form action="addnew1.php" method="POST" enctype="multipart/form-data">
																	<label>Enter Section</label>
																	<select name="lang" class="form-control margin-bottom-20">
																	<option value="PHP">PHP</option>
																	<option value="C#">C#</option>
																	<option value="GO">Go</option>
																	<option value="Python">Python</option>
																	<option value="Android">Android</option>
																	</select>
                             

<label>Enter title:</label>
 <input type="text" name="title" class="form-control margin-bottom-20" required>

<label>Enter your article here : </label><textarea rows=30 cols=50 name='article' class="form-control margin-bottom-20" required>	</textarea></p>

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