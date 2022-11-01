<?php //apro fase di php
    session_start(); //avvio la sessione
    session_destroy(); //distruggo la sessione
    header("Location: login.php"); //mando il client al login
?>