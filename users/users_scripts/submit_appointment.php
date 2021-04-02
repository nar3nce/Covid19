<?php

include('../../conn.php');

if(isset($_POST['submit'])) {
$id = $conn->real_escape_string($_POST['id']);
$date_submitted = "a";
$time =  $conn->real_escape_string($_POST['time']);
$nature =  $conn->real_escape_string($_POST['nature']);
$purpose =  $conn->real_escape_string($_POST['purpose']);
$department =  $conn->real_escape_string($_POST['department']);
$date =  $conn->real_escape_string($_POST['date']);
$radio1 =  $conn->real_escape_string($_POST['radio1']);
$radio2 =  $conn->real_escape_string($_POST['radio2']);
$radio3 =  $conn->real_escape_string($_POST['radio3']);
$radio4 =  $conn->real_escape_string($_POST['radio4']);
$radio5 =  $conn->real_escape_string($_POST['radio5']);
$radio6 =  $conn->real_escape_string($_POST['radio6']);
$radio7 =  $conn->real_escape_string($_POST['radio7']);
$radio8 =  $conn->real_escape_string($_POST['radio8']);
$radio9 =  $conn->real_escape_string($_POST['radio9']);
$radio10 =  $conn->real_escape_string($_POST['radio10']);
$radio11 =  $conn->real_escape_string($_POST['radio11']);



$sql = "  INSERT INTO `user_appointments` (`id`, `user_id`, `date_submitted`, `time_sched`, `nature`, `purpose`, `department`, `date`, `radio1`, `radio2`, `radio3`, `radio4`, `radio5`, `radio6`, `radio7`, `radio8`, `radio9`, `radio10`, `radio11` , `status`) VALUES (NULL, '$id', '$date_submitted', '$time', '$nature', '$purpose', '$department', '$date', '$radio1', '$radio2', '$radio3', '$radio4', '$radio5', '$radio6', '$radio7', '$radio8', '$radio9', '$radio10', '$radio11' , 'pending'); ";
	$query = $conn->query($sql);
	@header("location: ../schedule.php");

}
?>