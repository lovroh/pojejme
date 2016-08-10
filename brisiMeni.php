<?php
include 'connection.php';

if (isset($_POST['delete'])) {
	$id_meni = $_POST['id_meni'];
	$sql = "DELETE FROM meni WHERE id_meni='$id_meni'";
	$res = mysqli_query($con, $sql) or die("Failed" . mysqli_error($con));
	
	echo "Meni je odstranjen!";
	header('Location: restavracijaMeniji.php');
}
?>