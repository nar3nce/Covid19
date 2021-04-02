<?php

include('../../conn.php');

if(isset($_POST['submit'])) {
$id =  $conn->real_escape_string($_POST['id']);
$fullname =  $conn->real_escape_string($_POST['fullname']);
$password =  $conn->real_escape_string($_POST['password']);


$sql = " select * from admin where admin_id = '$id' and admin_password = '$password'";
	$query = $conn->query($sql);
	$row = $query->fetch_array();

  if($query->num_rows != 0)
   {
      $sql1 = " UPDATE `admin` SET `admin_fullname` = '$fullname' WHERE `admin`.`admin_id` = '$id'; ";
	$query = $conn->query($sql1);
	@header("location: ../index.php");
   }
   else
   {
    echo ' wrong username or password, try again <a href="../profile.php">Click Here</a>';
	exit();
   }
}
?>