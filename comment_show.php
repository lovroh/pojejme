

<?php
include 'connection.php';
	$sql = "SELECT * FROM user_comment ORDER BY doc DESC";
    $result = $con -> query($sql);
    
    if ($result -> num_rows > 0) {

        while ($row = $result -> fetch_assoc()) {
            echo '<div class="card bg-white no-border">
                	<div class="card-block">
                		<div class="profile-timeline-header">
                			<a href="#" class="profile-timeline-user"> <img src="images/avatar.jpg" alt="" class="img-rounded"> </a>
                			<div class="profile-timeline-user-details">
                				<a href="#" class="bold">'.$row['username'].'</a>
                				<br>
                				<em class="text-success small">'.date('d-m-Y', strtotime($row['doc'])).'</em>
                			</div>
                		</div>
                		<div class="profile-timeline-content">
                			<p>'.$row['comment'].'</p>
                		</div>
                	</div>
                </div>';
        }
           
    }else{
        echo 0;
    }
?>
                                            
                                            
                                            