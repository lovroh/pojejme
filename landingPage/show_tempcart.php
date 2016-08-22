<?php
    session_start();
	include '../connection.php';
    include '../functions.php';
    $user_id = (isset($_SESSION['user_id'])? $_SESSION['user_id']:1);
    
    $sql = "SELECT * FROM temp_cart WHERE user_id =".$user_id;
    $result = $con -> query($sql);
    
    if ($result -> num_rows > 0) {
        echo '<div style="padding:5px;"><table class="table table-striped table-bordered table-condensed">';
        echo '<thead><tr>
            	<th>Name</th>
            	<th>Qty</th>
            	<th>Price</th>
            	<th><i class="fa fa-trash"></i></th>
            </tr></thead><tbody>';
        while ($row = $result -> fetch_assoc()) {
            echo '
                    <tr>
                    	<td>'.get_value('meni', 'id_meni', $row['id_meni'], 'vrsta').'</td>
                    	<td>'.$row['quantity'].'</td>
                    	<td>&euro; '.number_format(get_value('meni', 'id_meni', $row['id_meni'], 'cena') * $row['quantity'], 2, '.', '').'</td>
                    	<td><a href="remove_temp.php?id='.$row['temp_cart_id'].'"><i class="fa fa-close"></i></a></td>
                    </tr>';
        }
        echo ' <tbody></table><a href="checkout.php?user_id='.$user_id.'" class="btn btn-primary btn-block">Check Out</a><div>';
    }else{
        echo 0;
    }
?>