<?php
    session_start();
    $utenza = $_POST['user'];
    $psw = $_POST['psw'];
    $conn = new mysqli('localhost','root','gardone','museo');
    $sql = "SELECT * FROM utente WHERE username = '$utenza' AND password = '$psw'";
    $result = $conn->query($sql);
    if ($result->num_rows>0) {
        $_SESSION['entrata']='ok';
        header('location:index.php');
    }
    else {
        header('location:login.php');
    }
?>