<?php

include('../conn.php');

if(isset($_POST['register'])) {
$fullname = $conn->real_escape_string($_POST['fullname']);
$email = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);

$sql = " INSERT INTO `users` (`id`, `fullname`, `email`, `password`) VALUES (NULL, '$fullname', '$email', '$password') ";
	$query = $conn->query($sql);

    $last_id = $conn->insert_id;

    $sql1 = " INSERT INTO `user_informarion` (`id`, `user_id`, `address`, `phone`, `gender`, `age`, `citizenship`) VALUES (NULL, '$last_id', ' ', ' ', ' ', ' ', ' '); ";
	$query = $conn->query($sql1);

    $sql3 = " INSERT INTO `user_emergency_contact` (`id`, `e_user_id`, `e_fullname`, `e_address`, `e_phone`, `e_relationship`) VALUES (NULL, '$last_id', ' ', ' ', ' ', ' '); ";
	$query = $conn->query($sql3);

	 @header("location: ../login.php");
}
?>