<?php

include('../../conn.php');

if(isset($_POST['submit'])) {
$id =  $conn->real_escape_string($_POST['id']);
$address =  $conn->real_escape_string($_POST['address']);
$fullname =  $conn->real_escape_string($_POST['fullname']);
$phone =  $conn->real_escape_string($_POST['phone']);
$relation =  $conn->real_escape_string($_POST['relation']);



$sql = " UPDATE `user_emergency_contact` SET `e_fullname` = '$fullname', `e_address` = '$address', `e_phone` = '$phone', `e_relationship` = '$relation' WHERE `user_emergency_contact`.`id` = '$id';
";
	$query = $conn->query($sql);
	@header("location: ../emergency.php");
}
?>