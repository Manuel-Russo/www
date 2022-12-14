<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location:login.php');
    }
    $utente_prenotante=$_SESSION['username'];
    $riga=$_POST['r'];
    $colonna=$_POST['c'];
    $sql="INSERT INTO prenotazioni(riga,colonna,sala,film,prenotante) VALUES ($riga,$colonna,1,1,'$utente_prenotante')"; //inserisco una nuova riga nella tabella con la prenotazione
    include "dati_connessione.php";
    $conn=new mysqli($server,$user,$password,$db);
    $result=$conn->query($sql);
    if($result===TRUE)  { //se il db mi risponde con true
        echo "tuttook"; //stampo
    }
    else    {
        echo "oops"; //altrimenti stampo
    }
    $conn->close(); //chiudo
?>
