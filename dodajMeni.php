<?php
include 'connection.php';
session_start();

if($_FILES['slika']['tmp_name'] == null){
    $slika = addslashes(file_get_contents('images/none.jpg'));
    $velikost = getimagesize('images/none.jpg');
} else {
    $slika = addslashes(file_get_contents($_FILES['slika']['tmp_name']));
    $velikost = getimagesize($_FILES['slika']['tmp_name']);
}

$jed = $_POST['jed'];
$vrsta = $_POST['vrsta'];
$cena = $_POST['cena'];
$sestavine = $_POST['sestavine'];
$boni = $_POST['boni'];
$info = $_POST['info'];
$id_restavracija = $_SESSION['id_restavracija'];

if (!$_POST['submit']) {
	echo "Vnesite zahtevane podatke!";
	header('Location: restavracijaMeniji.php');
} else {
    if ($velikost == FALSE) {
        echo "Izbrana datoteka ni slika!";
    } else{
        mysqli_query($con, "INSERT INTO meni (`id_meni`, `slika`, `jed`, `vrsta`, `cena`, `sestavine`, `boni`, `info`, `fk_id_restavracija`)
            VALUES(NULL, '$slika', '$jed', '$vrsta', '$cena', '$sestavine', '$boni', '$info', '$id_restavracija')") or die(mysqli_error($con));

        echo "Meni je dodan!";
        header('Location: restavracijaMeniji.php');
        }
}
?>