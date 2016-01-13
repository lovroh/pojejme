<html>
<head>
	<meta http-equiv="refresh" content="3;url=http://localhost/RIS_2/static/app/restavracija-signup.html" />
</head>
<body>
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
	$kraj = $_POST['kraj'];
	$naslov = $_POST['naslov'];
	$opis = $_POST['opis'];
	$postna_st = $_POST['postna_st'];
	$telefon = $_POST['telefon'];
	$vrsta = $_POST['vrsta'];
	//$email = $_POST['email'];
	//$geslo = $_POST['geslo'];
	
	$sql = "INSERT INTO restavracija (idRestavracija, ime, vrsta, naslov, kraj, postna_st, opis, telefon)
			VALUES (NULL, '$ime', '$vrsta', '$naslov', '$kraj', '$postna_st', '$opis', '$telefon')";
	
	if ($conn->query($sql) === TRUE) {
	    echo "Success!";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
?>
, vracam na registracijo...
</body>
</html>
