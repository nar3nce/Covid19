<?php

include('../../conn.php');

if(isset($_GET['acceptid'])) {
   $id = $_GET['acceptid'];
   
   $sql = " UPDATE `user_appointments` SET `status` = 'Accepted' WHERE `user_appointments`.`id` = '$id';";
   $conn->query($sql);

   header("Location: ../accept_appointment.php");
}

if(isset($_GET['rejectid'])) {
   $id = $_GET['rejectid'];
   
   $sql = " UPDATE `user_appointments` SET `status` = 'Rejected' WHERE `user_appointments`.`id` = '$id';";
   $conn->query($sql);

   header("Location: ../accept_appointment.php");
}
?>