<?php
	
	include 'connection.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$ime = $_POST['ime'];
	$priimek = $_POST['priimek'];
	$email = $_POST['email'];
	$telefonska = $_POST['telefonska'];
	$ulica = $_POST['ulica'];
	$kraj = $_POST['kraj'];
	$postnast = $_POST['postnast'];
	
	$sql = "INSERT INTO uporabnik (user_id, username, password, ime, priimek, email, telefonska, ulica, kraj, postnast)
			VALUES (NULL, '$username', '$password', '$ime', '$priimek', '$email', '$telefonska', '$ulica', '$kraj', '$postnast')";
			
	if (!$con->query($sql))
		   echo "Error: " . $sql . "<br>" . $cnn->error;
	
	$con->close();
    
    header("Location: landingPage/index.php");
?>