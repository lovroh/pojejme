<?php
	include 'connection.php';
    
    $username = $_GET['username'];
    $comment = $_GET['comment'];
    
    $sql = "INSERT INTO user_comment (username, comment) VALUES ('".$username."', '".$comment."')";
    $result = $con -> query($sql);
    
    echo $comment;
?>