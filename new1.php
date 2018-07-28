<?php
include 'commonhead.php';
?>

                        <div class="container">
                            <div class="row margin-vert-12">
                                <!-- Register Box -->
                                <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                    <form class="signup-page"  name="loginform" action="new2.php" method="post" enctype="multipart/form-data">
                                        <div class="signup-header">
                                            <h2>Register a new account</h2>
                                            <p>Already a member? Click
                                                <a href="#">HERE</a>to login to your account.</p>
                                        </div>
										 <label>First Name</label>
                                        <input class="form-control margin-bottom-30" type="text" name="fname" placeholder="Enter your First Name" required autofocus>
  
											<label>Last Name</label>
                                        <input class="form-control margin-bottom-20" type="text" name="lname" placeholder="Enter your Last Name" required>
										<label>Email</label>
                                        <input class="form-control margin-bottom-20" type="email" name="email">
										<label>Contact</label>
                                        <input class="form-control margin-bottom-20" type="number" name="contact" pattern="[0-9]{10}">
										  <label>Branch</label>
										   <select name="branch" class="form-control margin-bottom-20">
										  <option value="Computer">Computer</option>
										  <option value="IT">IT</option>
										  <option value="EC">EC</option>
										  <option value="Electrical">Electrical</option>
										</select>
										  <label>Semester:</label>
											 <select name="sem" class="form-control margin-bottom-20">
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										  <option value="6">6</option>
										  <option value="7">7</option>
										  <option value="8">8</option>
										  
										</select>
										
<label>Enrollment No:</label>
<input type="number" name="enroll" class="form-control margin-bottom-20">
 <label>Profile Image</label>
  
	<input type="file" name='userFile' class="form-control margin-bottom-20">

<label>Interested Stream(s):</label><br>
										  <div>
											<input type="checkbox" name="stream[]"  value="linux">Linux/Open Source Technology
											<br>
											<input type="checkbox" name="stream[]"  value="web">Web Development
											<br>
											<input type="checkbox" name="stream[]"  value="code">Competitive Coding
											<br>
											<input type="checkbox" name="stream[]"  value="app">Mobile Application Development
											<br>
											<input type="checkbox" name="stream[]" value="python">Python Scripting
											<br>
											<input type="checkbox" name="stream[]"  value="research">Research Work
											<br>
											<label>Others:</label>
										<input type="text" name="stream[]" placeholder="Other than given above">(eg:Project Development,etc.)
										  </div>
										<br>
<label>Username:</label>
    <input name="username" type="text" class="form-control margin-bottom-20"/>
  <label>Password:</label>
    <input name="pass" id="pass" class="form-control margin-bottom-20" type="password" />
  
  
<label>Confirm Password:</label>
    <input name="cpass" id="cpass" class="form-control margin-bottom-20" type="password" />
    <td><input name="submit" class="btn btn-primary"type="submit" value="Submit" />  

	</form>
</body>

  <script type="text/javascript">
window.onload = function () {
	document.getElementById("pass").onchange = validatePassword;
	document.getElementById("cpass").onchange = validatePassword;
}
function validatePassword(){
var pass2=document.getElementById("cpass").value;
var pass1=document.getElementById("pass").value;
if(pass1!=pass2)
	document.getElementById("cpass").setCustomValidity("Passwords Don't Match");
else
	document.getElementById("cpass").setCustomValidity('');	 
//empty string means no validation error
}
</script>