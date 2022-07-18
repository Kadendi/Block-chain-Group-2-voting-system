<?php
	$conn = new mysqli('localhost', 'root', '', 'myvote');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>