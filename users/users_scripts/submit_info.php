<?php

include('../../conn.php');

if(isset($_POST['submit'])) {
$id =  $conn->real_escape_string($_POST['id']);
$address =  $conn->real_escape_string($_POST['address']);
$phone =  $conn->real_escape_string($_POST['phone']);
$gender =  $conn->real_escape_string($_POST['gender']);
$age =  $conn->real_escape_string($_POST['age']);
$citizenship =  $conn->real_escape_string($_POST['citizenship']);


$sql = " UPDATE `user_informarion` SET `address` = '$address', `phone` = '$phone', `gender` = '$gender', `age` = '$age', `citizenship` = '$citizenship' WHERE `user_informarion`.`id` = '$id';
";
	$query = $conn->query($sql);
	@header("location: ../information.php");

}
?>