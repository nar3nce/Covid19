<?php
	$conn = new mysqli('localhost', 'root', '', 'covid19');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>