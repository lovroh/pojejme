<?php
include 'includes/connection.php';

$slika = addslashes(file_get_contents($_FILES['slika']['tmp_name']));
$ime = $_POST['ime'];
$vrsta = $_POST['vrsta'];
$emailfield = $_POST['emailfield'];
$number = $_POST['number'];
$passwordfield = $_POST['passwordfield'];
$boni = $_POST['boni'];
$kraj = $_POST['kraj'];
$naslov = $_POST['naslov'];
$teden1 = $_POST['teden1'];
$teden2 = $_POST['teden2'];
$sobota1 = $_POST['sobota1'];
$sobota2 = $_POST['sobota2'];
$nedelja1 = $_POST['nedelja1'];
$nedelja2 = $_POST['nedelja2'];

if (!$_POST['submit']) {
	echo "Vnesite zahtevane podatke!";
	header('Location: dodajanjeRestavracije.php');
} else {
	$velikost = getimagesize($_FILES['slika']['tmp_name']);
	if ($velikost == FALSE) {
		echo "Izbrana datoteka ni slika!";
	} else {
		mysql_query("INSERT INTO restavracija (`id_restavracija`, `slika`, `ime`, `vrsta`, `emailfield`, `number`, `passwordfield`, 
		`boni`, `kraj`, `naslov`, `teden1`, `teden2`, `sobota1`, `sobota2`, `nedelja1`, `nedelja2`)
					VALUES(NULL, '$slika', '$ime', '$vrsta', '$emailfield', '$number', '$passwordfield', '$boni', '$kraj', '$naslov',
		'$teden1', '$teden2', '$sobota1', '$sobota2', '$nedelja1', '$nedelja2')") or die(mysql_error());

		echo "Restavracija je dodana!";
		header('Location: dodajanjeRestavracije.php');
	}
}
?>