<?php 
    session_start();
    if($_POST['user'] == 's' && $_POST['pwd'] == 'r')    {
        $_SESSION['stato'] = 'ok';
        header("Location:index.php");
    }
    else {
        header("Location:login.php");
    }
?>