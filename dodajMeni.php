<?php
	include 'includes/connection.php';

	$jed = $_POST['jed'];
	$vrsta = $_POST['vrsta'];
	$cena = $_POST['cena'];
	$sestavine = $_POST['sestavine'];
	$boni = $_POST['boni'];
	$info = $_POST['info'];

	if(!$_POST['submit']){
		echo "Vnesite zahtevane podatke!";
		header('Location: restavracijaMeniji.php');
	} else{
		mysql_query("INSERT INTO meni (`id_meni`, `jed`, `vrsta`, `cena`, `sestavine`, `boni`, `info`)
					VALUES(NULL, '$jed', '$vrsta', '$cena', '$sestavine', '$boni', '$info')") or die(mysql_error());

		echo "Meni je dodan!";
		header('Location: restavracijaMeniji.php');
	}
	
?>