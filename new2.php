<?php
//ENTER YOUR DATABASE CONNECTION INFO BELOW:
require 'conn.php';
if(isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['email'])&&isset($_POST['username'])&&isset($_POST['contact'])&&isset($_POST['pass'])&&isset($_POST['sem'])&& !empty($_POST['fname'])&&!empty($_POST['lname'])&&!empty($_POST['email'])&&!empty($_POST['username'])&&!empty($_POST['contact'])&&!empty($_POST['pass'])&&!empty($_POST['sem'])){ // Fetching variables of the form which travels in URL
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$username=$_POST['username'];
$contact = $_POST['contact'];
$password = $_POST['pass'];
$sem = $_POST['sem'];
$branch = $_POST['branch'];
$enroll = $_POST['enroll'];
$epass=md5("$password");
$interest=implode(",",$_POST['stream']);

if($fname !=''||$lname !=''||$email !=''||$contact !=''||$password !=''){
//Insert Query of SQL
$query = mysqli_query($con,"INSERT INTO `hoax`.`users` (`id`, `username`, `pass`, `First name`, `Last Name`, `Email`, `conatct`, `branch`,`sem`,`Enroll`,`interests`) VALUES ('', '$username', '$epass', '$fname', '$lname', '$email', '$contact', '$branch','$sem','$enroll','$interest')");

$info = pathinfo($_FILES['userFile']['tmp_name']);
$ext = 'jpg'; // get the extension of the file
$newname = $username.".".$ext; 
$target = "profileimages/".$newname;
move_uploaded_file( $_FILES['userFile']['tmp_name'], $target);
$runz=mysqli_query($con,"SELECT * FROM `hoax`.`users` WHERE `username`='$username'");
if($runz->num_rows==0)
{
header("location:response.php");
}
else 
	{
			echo " Username already taken";
	}
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}

}
mysqli_close($con);
header("location:response.php");
?>