<?php
	#********* povezava na PB ********************************************************/
	$db_hostname = 'localhost';
	$db_username = 'root';
	$db_password = '';
	$db_name = 'mydb';
	
	$conn = new mysqli($db_hostname, $db_username, $db_password, $db_name);
	
	//preveri ce se je povezalo
	if ($conn->connect_error) {
   		die("Connection failed: " . $conn->connect_error);
	}
	#*********************************************************************************/
	
	$ime = $_POST['ime'];

	$sql = "SELECT ime FROM restavracija";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	if($row["ime"] == $ime)
	        	echo "Ime: " . $row["ime"];
	    }
	} else {
	    echo "Ni te v bazi";
	}
	$conn->close();
?>
