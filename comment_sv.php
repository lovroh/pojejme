<?php
	include 'connection.php';
    session_start();

    if ($_SESSION['username'] == null)
        $username = $_GET['username'];
    else
        $username= $_SESSION['username'];

        $comment = $_GET['comment'];
		$id = $_GET['id_restavracija'];

    $sql = "INSERT INTO user_comment (username, comment, fk_id_restavracija) VALUES ('".$username."', '".$comment."','".$id."')";
    $result = $con -> query($sql);

    echo $comment;
?>
