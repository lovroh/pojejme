<?php
include 'includes/connection.php';

if (isset($_POST['delete'])) {
	$id_meni = $_POST['id_meni'];
	$sql = "DELETE FROM meni WHERE id_meni='$id_meni'";
	$res = mysql_query($sql) or die("Failed" . mysql_error());
	
	echo "Meni je odstranjen!";
	header('Location: restavracijaMeniji.php');
}
?>