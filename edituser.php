<?php
	
	session_start();

	include 'connection.php';

	$username = $_SESSION['username'];

	$ime = $_POST['ime'];
	$priimek = $_POST['priimek'];
	$opis = $_POST['opis'];
	$email = $_POST['email'];
	$telefonska = $_POST['telefonska'];
	$ulica = $_POST['ulica'];
	$kraj = $_POST['kraj'];
	$postnast = $_POST['postnast'];


	

	$sql = "UPDATE uporabnik SET ime='$ime', priimek='$priimek', opis='$opis', email='$email',
	telefonska='$telefonska', ulica='$ulica', kraj='$kraj', postnast='$postnast' WHERE uporabnik='$uporabnik'";

	if (!$conn->query($sql))
		   echo "Error: " . $sql . "<br>" . $conn->error;
	

	$conn->close();
			
?>