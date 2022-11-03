<?php
    session_start();
    $utenza = $_POST['user'];
    $psw = $_POST['pwd'];
    try {
        $conn = new mysqli("localhost","root","gardone","universita");
        $sql = "SELECT * FROM persona WHERE username = '$utenza' AND password = '$psw'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0 ) {
            header('location: index.php');
        }
        else {
            header('location: login.php');
        }
    } catch (Throwable $error) {
        echo "c'è un errore: ".$error; 
    }
?>