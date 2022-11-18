<?php
    session_start();
    $utente_prenotante=$_SESSION['username'];
    $riga=$_POST['r'];
    $colonna=$_POST['c'];
    $sql="DELETE FROM prenotazioni WHERE riga = $riga AND colonna = $colonna";
    include "dati_connessione.php";
    $conn=new mysqli($server,$user,$password,$db);
    $conn->query($sql);
    $conn->close();
?>