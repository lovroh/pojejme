<?php
	include '../connection.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM temp_cart WHERE temp_cart_id = ".$id;
    $result = $con -> query($sql);
    
    header("Location: food_menu.php");
    
?>