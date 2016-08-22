<?php
error_reporting(0);
session_start();
    $user_id = (isset($_SESSION['user_id'])? $_SESSION['user_id']:header("Location: ../uporabnik-prijava.html"));
    
	include '../connection.php';
    include ('shared/head.php');
    
    $user_id = $_GET['user_id'];
    
    $sql = "SELECT * FROM temp_cart WHERE user_id = ".$user_id;
    $result = $con -> query($sql);
    if ($result -> num_rows > 0) {
        while ($row = $result -> fetch_assoc()) {
           $user_ids = $row['user_id'];
           $id_meni = $row['id_meni'];
           $quantity = $row['quantity'];
           
           $sql1 = "INSERT INTO main_cart (user_id, id_meni, quantity) VALUES (".$user_ids.", ".$id_meni.", ".$quantity.")";
           $result1 = $con -> query($sql1);
           
           $sql2 = "DELETE FROM temp_cart WHERE temp_cart_id = ".$row['temp_cart_id'];
           $result2 = $con -> query($sql2);
        }
    }
    
?>

<section>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Checkout Succes!!</h1>
        </div>
    </div>
</div>


 </section>

 <?php 
 //session_destroy();
include ('shared/foot.php');
?>