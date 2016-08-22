<?php
	include '../connection.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM main_cart WHERE cart_id = ".$id;
    $result = $con -> query($sql);
    
    header("Location: orderlist.php");
    
?>