<?php
include 'connection.php';
session_start();

$id = $_SESSION['id_restavracija'];

if (!$_POST['submit']) {
    echo "Vnesite zahtevane podatke!";
    header('Location: restavracijaUrejanje.php');
} else {
    $ime = $_POST['ime'];
    $vrsta = $_POST['vrsta'];
    $number = $_POST['number'];
    $kraj = $_POST['kraj'];
    $naslov = $_POST['naslov'];
    $boni = $_POST['boni'];
    $teden1 = $_POST['teden1'];
    $teden2 = $_POST['teden2'];
    $sobota1 = $_POST['sobota1'];
    $sobota2 = $_POST['sobota2'];
    $nedelja1 = $_POST['nedelja1'];
    $nedelja2 = $_POST['nedelja2'];

    if ($_FILES['slika']['tmp_name'] == null) {
        mysqli_query($con, "UPDATE restavracija SET ime = '$ime', vrsta = '$vrsta', number = '$number', boni = '$boni', 
        kraj = '$kraj', naslov = '$naslov', teden1 = '$teden1', teden2 = '$teden2', sobota1 = '$sobota1', sobota2 = '$sobota2',
        nedelja1 = '$nedelja1', nedelja2 = '$nedelja2' WHERE id_restavracija = '$id';") or die(mysqli_error($con));
    } else {
        $slika = addslashes(file_get_contents($_FILES['slika']['tmp_name']));
        $velikost = getimagesize($_FILES['slika']['tmp_name']);

        if ($velikost == FALSE) {
            echo "Izbrana datoteka ni slika!";
        } else {
            mysqli_query($con, "UPDATE restavracija SET slika = '$slika', ime = '$ime', vrsta = '$vrsta', number = '$number',
            boni = '$boni', kraj = '$kraj', naslov = '$naslov', teden1 = '$teden1', teden2 = '$teden2', sobota1 = '$sobota1', 
            sobota2 = '$sobota2', nedelja1 = '$nedelja1', nedelja2 = '$nedelja2' WHERE id_restavracija = '$id';") or die(mysqli_error($con));
        }
    }
    $_SESSION['ime'] = $ime;
    $_SESSION['vrsta'] = $vrsta;
    $_SESSION['number'] = $number;
    $_SESSION['boni'] = $boni;
    $_SESSION['kraj'] = $kraj;
    $_SESSION['naslov'] = $naslov;
    $_SESSION['teden1'] = $teden1;
    $_SESSION['teden2'] = $teden2;
    $_SESSION['sobota1'] = $sobota1;
    $_SESSION['sobota2'] = $sobota2;
    $_SESSION['nedelja1'] = $nedelja1;
    $_SESSION['nedelja2'] = $nedelja2;

    echo "Restavracija je urejena!";
    header('Location: restavracijaDomov.php');
}
?>