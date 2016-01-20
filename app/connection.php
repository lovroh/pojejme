<?php
	#********* povezava na PB ********************************************************/
	$db_hostname = 'db4free.net:3306';
	$db_username = 'pojejme1';
	$db_password = 'pojejme773';
	$db_name = 'pojejme';
	
	$conn = new mysqli($db_hostname, $db_username, $db_password, $db_name);
	
	//preveri ce se je povezalo
	if ($conn->connect_error) {
   		die("Connection failed: " . $conn->connect_error);
	}
?>