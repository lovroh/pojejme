<?php
    
    include '../connection.php';
    include ('shared/head.php');
    include '../functions.php';
    $sql = "SELECT * FROM main_cart WHERE status = 0";
    $result = $con -> query($sql);
?>


<section>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h3 class="text-center"><ins>Order List</ins></h3>
        <table class="table table-striped table-bordered table-condensed">
            <thead>
                <tr>
                	<th>Date</th>
                	<th>Customer</th>
                    <th>Customer Email</th>
                	<th>Item</th>
                	<th>Qty</th>
                	<th>Price</th>
                    <th><i class="fa fa-trash"></i></th>
                </tr>
            </thead>
            <tbody>
            
            <?php
            
            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()){
            ?>
            
            <tr>
                	<td><?php echo date('d-m-Y', strtotime($row['doc'])); ?></td>
                	<td><?php echo get_value('uporabnik', 'user_id', $row['user_id'], 'Name'); ?></td>
                    <td><?php echo get_value('uporabnik', 'user_id', $row['user_id'], 'email'); ?></td>
                	<td><?php echo get_value('meni', 'id_meni', $row['id_meni'], 'vrsta'); ?></td>
                	<td><?php echo $row['quantity']; ?></td>
                	<td><?php echo number_format(get_value('meni', 'id_meni', $row['id_meni'], 'cena') * $row['quantity'], 2, '.', ''); ?></td>
                    <td><a href="del_order.php?id=<?php echo $row['cart_id']; ?>"><i class="fa fa-close"></i></a></td>
                </tr>
                    
            <?php
                    
                }
            }
	
            ?>
             
            </tbody>
        </table>
        
        
        
        <input type="hidden" id="temp_cart" value="show_tempcart.php" />
        
            <?php
            	if ($result -> num_rows > 0) {
                    while ($row = $result -> fetch_assoc()) {
                        ?>
                        <div class="cooldiv">
                            <div class="panel panel-default">
                            <img src="img/demo.jpg" class="img-responsive" title="<?php echo $row['jed']; ?>" alt="<?php echo $row['jed']; ?>"/>
                              <div class="panel-body" style="padding: 5px 10px;">
                                <h3 style="color: white;"><?php echo $row['vrsta']; ?></h3>
                                <h3 style="color: white;">&euro; <?php echo $row['cena']; ?></h3>
                                <button class="btn  btn-primary btn-block btn_add_cart" data-url="add_cart.php" data-user="<?php  echo (isset($_SESSION['user_id'])? $_SESSION['user_id']:1); ?>" value="<?php echo $row['id_meni']; ?>">Add to cart</button>
                              </div>
                            </div>
                        </div>
                        
                       <?php
                    }
                }
            ?>
            
        </div>
    </div>
</div>

 </section>

 <?php include ('shared/foot.php'); ?>