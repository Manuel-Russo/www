<?php //apro fase di php
    session_start(); //avvio la sessione con il controllo login
    if($_POST['user'] == 's' && $_POST['pwd'] == 'r')    { //se le info inserite nel form corrispondono
        $_SESSION['stato'] = 'ok'; //lo stato della sessione diveta ok
        header("Location:index.php"); //invio il client a index.php
    }
    else { //se non corrispondono
        header("Location:login.php"); //ricarico il login
    }
?>