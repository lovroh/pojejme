<?php

include '../connection.php';
$user_id = $_GET['user_id'];
$id_meni = $_GET['id_meni'];

$sql = "SELECT * FROM temp_cart WHERE user_id = ".$user_id." AND id_meni = ".$id_meni;
$result = $con -> query($sql);

	if ($result -> num_rows > 0) {
        while ($row = $result -> fetch_assoc()) {
            $qty = $row['quantity'] + 1;
            $sql1 = "UPDATE temp_cart SET quantity = ".$qty." WHERE user_id = ".$user_id." AND id_meni = ".$id_meni;
            $result1 = $con -> query($sql1);
            return 1;
        }
    }else{
        $sql1 = "INSERT INTO temp_cart (user_id, id_meni, quantity) VALUES (".$user_id.", ".$id_meni.", 1)" ;
            $result1 = $con -> query($sql1);
        echo 0;
    }
?>