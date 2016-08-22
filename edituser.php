<?php
	
	session_start();

	include 'connection.php';

	$username = $_SESSION['username'];

	$ime = $_POST['ime'];
	$priimek = $_POST['priimek'];
	$email = $_POST['email'];
	$telefonska = $_POST['telefonska'];
	$ulica = $_POST['ulica'];
	$kraj = $_POST['kraj'];
	$postnast = $_POST['postnast'];


	

	$sql = "UPDATE uporabnik SET ime='$ime', priimek='$priimek', email='$email',
	telefonska='$telefonska', ulica='$ulica', kraj='$kraj', postnast='$postnast' WHERE username='$username'";



	if (!$con->query($sql))
		   echo "Error: " . $sql . "<br>" . $con->error;
    else{
        $_SESSION['ime'] = $ime;
        $_SESSION['priimek'] = $priimek;
        $_SESSION['email'] = $email;
        $_SESSION['telefonska'] = $telefonska;
        $_SESSION['ulica'] = $rulica;
        $_SESSION['kraj'] = $kraj;
        $_SESSION['postnast'] = $postnast;

        header('Location: landingPage/index.php');
    }



$con->close();
			
?>