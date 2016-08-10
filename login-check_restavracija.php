<?php
session_start();
include 'connection.php';

if(isset($_POST["submit"])) {
    if(empty($_POST["emailfield"]) || empty($_POST["passwordfield"])) {
       echo "Both fields are required";
    } else {
        $emailfield = $_POST['emailfield'];
        $passwordfield = $_POST['passwordfield'];

        $sql = "SELECT * FROM restavracija WHERE emailfield = '$emailfield' AND passwordfield = '$passwordfield'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        if(mysqli_num_rows($result) == 1) {
            $_SESSION['id_restavracija'] = $row['id_restavracija'];
            $_SESSION['ime'] = $row['ime'];
            $_SESSION['vrsta'] = $row['vrsta'];
            $_SESSION['emailfield'] = $row['emailfield'];
            $_SESSION['number'] = $row['number'];
            $_SESSION['boni'] = $row['boni'];
            $_SESSION['kraj'] = $row['kraj'];
            $_SESSION['naslov'] = $row['naslov'];
            $_SESSION['teden1'] = $row['teden1'];
            $_SESSION['teden2'] = $row['teden2'];
            $_SESSION['sobota1'] = $row['sobota1'];
            $_SESSION['sobota2'] = $row['sobota2'];
            $_SESSION['nedelja1'] = $row['nedelja1'];
            $_SESSION['nedelja2'] = $row['nedelja2'];

            header("location: restavracijaDomov.php");
        } else {
            echo "Not found";
            header("location: restavracijaPrijava.html");
        }

    }
}

?>

