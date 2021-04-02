<?php

include('../../conn.php');

if(isset($_POST['submit'])) {
   $target_dir = "../user_attachments/";
   $new = $conn->real_escape_string($_POST['newname']);
   $target_file = $target_dir . $new . basename($_FILES["attachment"]["name"]);
   $id = $conn->real_escape_string($_POST['id']);
   $attachment = $new . basename($_FILES["attachment"]["name"]);

  
   
if(empty($_FILES['attachment']))
  {
   echo "NO FILE SELECTED";
   
}else {
   
   if (move_uploaded_file($_FILES["attachment"]["tmp_name"], $target_file)) {
      $sql = " INSERT INTO `user_attachment` (`id`, `user_id`, `attachment_name`) VALUES (NULL, '$id', '$attachment'); ";
	  $query = $conn->query($sql);
      @header("location: ../attachments.php");
    } else {
      echo "NO FILE SELECTED";
    }
}
}


if(isset($_GET['deletefile'])){
   $file = $_GET['deletefile'];
   $fileid = $_GET['fileid'];

   unlink('../user_attachments/'.$file.'');
   $sql = "DELETE FROM `user_attachment` WHERE `user_attachment`.`id` = '$fileid'";
   $conn->query($sql);
   @header("location: ../attachments.php");
   //echo getcwd();
}
?>


