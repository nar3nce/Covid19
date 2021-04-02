<?php

include('../conn.php');

session_start();

if(isset($_POST['submit']))
{
	$email = $conn->real_escape_string($_POST['email']);
	$password = $conn->real_escape_string($_POST['password']);

	$sql = " select * from users where email = '$email' and password = '$password'";
	$query = $conn->query($sql);
	$row = $query->fetch_array();

  if($query->num_rows != 0)
   {
    $_SESSION['user_id'] = $row['id'];
	$_SESSION['fullname'] = $row['fullname'];
    $_SESSION['email'] = $row['email'];
    @header("location: ../users/profile.php");
    exit();
   }
   else
   {
    echo ' wrong username or password, try again <a href="../login.php">Click Here</a>';
	exit();
   }
}
?>