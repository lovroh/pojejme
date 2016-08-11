<?php
include 'connection.php';
session_start();

if ($_POST['submit']) {
    $obvestilo = $_POST['obvestilo'];
    $datum = date("Y/m/d");
    $id_restavracija = $_SESSION['id_restavracija'];

    mysqli_query($con, "INSERT INTO obvestilo (`id_obvestilo`, `besedilo`, `datum`, `fk_id_restavracija`)
          VALUES(NULL, '$obvestilo', '$datum', '$id_restavracija')") or die(mysqli_error($con));

    echo "Obvestilo je dodano!";
    header('Location: restavracijaDomov.php');
}
if($_POST['delete']){
    $id_obvestilo = $_POST['id_obvestilo'];
    $sql = "DELETE FROM obvestilo WHERE id_obvestilo='$id_obvestilo'";
    $res = mysqli_query($con, $sql) or die("Failed" . mysqli_error($con));

    echo "Obvestilo je odstranjeno!";
    header('Location: restavracijaDomov.php');
}



?>