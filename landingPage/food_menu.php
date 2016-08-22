
<?php 
error_reporting(0);
session_start();
    $user_id = (isset($_SESSION['user_id'])? $_SESSION['user_id']:header("Location: ../uporabnik-prijava.html"));
include '../connection.php';
include ('shared/head.php');
$sql = "SELECT * FROM meni";
$result = $con -> query($sql);
?>

<section>

<div class="container">
    <div class="row">
        <div class="col-md-12 food_menue">
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

<div class="cart_menue"></div>

 </section>
 
 
 <?php 
include ('shared/foot.php');
?>