
<?php
session_start();
include_once 'connection.php';

if(isset($_POST['save']))
{	 
	 $first_name = $_POST['fname'];
	 $last_name = $_POST['lname'];
	 $username = $_POST['username'];
	 $password = $_POST['pass'];
	 $sql = "INSERT INTO user_added (name,last_name,username,password)
	 VALUES ('$first_name','$last_name','$username','$password')";
	 if (mysqli_query($con, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}



?>
