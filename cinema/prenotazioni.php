<?php
    session_start();
    $utente_prenotante=$_SESSION['username'];
    $riga=$_POST['r'];
    $colonna=$_POST['c'];
    $sql="INSERT INTO prenotazioni(riga,colonna,sala,film,prenotante) VALUES ($riga,$colonna,1,1,'$utente_prenotante')";
    include "dati_connessione.php";
    $conn=new mysqli($server,$user,$password,$db);
    if($conn->query($sql)===TRUE){
        echo "tuttook";
    }
    else{
        echo "oops";
    }
    $conn->close();
?>
