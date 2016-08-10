<?php

    session_start();
    include 'connection.php';
        
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM uporabnik";
    $result = $conn -> query($sql);
    $switch = false;
    
    if ($result -> num_rows > 0) {
        while ($row = $result -> fetch_assoc()) {
            if ($row["username"] == $username && $row["password"] == $password) {
                $_SESSION['loggedin_uporabnik'] = true;
                $_SESSION['ime'] = $row['ime'];
                $_SESSION['priimek'] = $row['priimek'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['telefonska'] = $row['telefonska'];
                $_SESSION['ulica'] = $row['ulica'];
                $_SESSION['kraj'] = $row['kraj'];
                $_SESSION['postnast'] = $row['postnast'];
                $switch = true;
            }
        }
    }
    
    if ($switch)
       header("Location: ../../landing_page/index.php");
    else 
       header("Location: uporabnik-prijava.html");
    
    $conn -> close();
?>