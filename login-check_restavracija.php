<?php
    session_start();
    include 'connection.php';
        
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM restavracija";
    $result = mysqli_query($con, $sql);
    $switch = false;
    
    if ($result -> num_rows > 0) {
        while ($row = $result -> fetch_assoc()) {
            if ($row["email"] == $email && $row["password"] == $password) {
                $_SESSION['loggedin_restavracija'] = true;
                $_SESSION['ime'] = $row['ime'];
                $_SESSION['vrsta'] = $row['vrsta'];
                $_SESSION['email'] = $row['emailfield'];
                $_SESSION['number'] = $row['number'];
                $_SESSION['password'] = $row['passwordfield'];
                $_SESSION['boni'] = $row['boni'];
                $_SESSION['kraj'] = $row['kraj'];
                $_SESSION['naslov'] = $row['naslov'];
                $_SESSION['teden1'] = $row['teden1'];
                $_SESSION['teden2'] = $row['teden2'];
                $_SESSION['sobota1'] = $row['sobota1'];
                $_SESSION['sobota2'] = $row['sobota2'];
                $_SESSION['nedelja1'] = $row['nedelja1'];
                $_SESSION['nedelja2'] = $row['nedelja2'];
                $switch = true;
            }
        }
    }
    
    if ($switch)
        header("Location: restavracijaDomov.php");
    else 
       header("Location: restavracijaPrijava.html");
    
    $conn -> close();
?>