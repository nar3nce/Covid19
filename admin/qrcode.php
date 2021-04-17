<?php
if(isset($_GET['qrid'])) {
  
  include '../conn.php';
  include('admin_scripts/restriction.php');
  $id = $conn->real_escape_string($_GET['qrid']);
  $date = date('Y-m-d');
  $query = run_query("INSERT INTO `visitors` (`id`, `visitor_id`, `date_visited`) VALUES (NULL, '$id', '$date');");
  header('Location: scan_success.php');
}
else{
  echo "divine";
}

?>