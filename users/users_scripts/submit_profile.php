<?php

include('../../conn.php');

if(isset($_POST['submit'])) {
$id =  $conn->real_escape_string($_POST['id']);
$fullname =  $conn->real_escape_string($_POST['fullname']);
$password =  $conn->real_escape_string($_POST['password']);


$sql = " select * from users where id = '$id' and password = '$password'";
	$query = $conn->query($sql);
	$row = $query->fetch_array();

  if($query->num_rows != 0)
   {
    $sql1 = " UPDATE `users` SET `fullname` = '$fullname' WHERE `users`.`id` = '$id'; ";
	$query = $conn->query($sql1);
	@header("location: ../profile.php");
   }
   else
   {
    echo ' wrong username or password, try again <a href="../profile.php">Click Here</a>';
	exit();
   }
}
?>