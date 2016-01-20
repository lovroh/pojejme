<?php
include 'includes/connection.php';

$slika = addslashes(file_get_contents($_FILES['slika']['tmp_name']));
$jed = $_POST['jed'];
$vrsta = $_POST['vrsta'];
$cena = $_POST['cena'];
$sestavine = $_POST['sestavine'];
$boni = $_POST['boni'];
$info = $_POST['info'];

if (!$_POST['submit']) {
	echo "Vnesite zahtevane podatke!";
	header('Location: restavracijaMeniji.php');
} else {
	$velikost = getimagesize($_FILES['slika']['tmp_name']);
	if ($velikost == FALSE) {
		echo "Izbrana datoteka ni slika!";
	} else {
		mysql_query("INSERT INTO meni (`id_meni`, `slika`, `jed`, `vrsta`, `cena`, `sestavine`, `boni`, `info`)
					VALUES(NULL, '$slika', '$jed', '$vrsta', '$cena', '$sestavine', '$boni', '$info')") or die(mysql_error());

		echo "Meni je dodan!";
		header('Location: restavracijaMeniji.php');
	}
}
?>