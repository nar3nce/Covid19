<?php

include('../../conn.php');

session_start();

if(isset($_POST['submit']))
{
	$email = $conn->real_escape_string($_POST['email']);
	$password = $conn->real_escape_string($_POST['password']);

	$sql = " select * from admin where admin_email = '$email' and admin_password = '$password'";
	$query = $conn->query($sql);
	$row = $query->fetch_array();

  if($query->num_rows != 0)
   {
    $_SESSION['admin_id'] = $row['admin_id'];
	$_SESSION['admin_fullname'] = $row['admin_fullname'];
    @header("location: ../index.php");
    exit();
   }
   else
   {
    echo ' wrong username or password, try again <a href="../login.php">Click Here</a>';
	exit();
   }
}
?>