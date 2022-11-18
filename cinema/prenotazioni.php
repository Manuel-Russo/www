<?php
    session_start();
    $utente_prenotante = $_SESSION['username'];
    $riga = $_POST['r_mandata'];
    $colonna = $_POST['c_mandata'];
    $sql = "INSERT INTO prenotazione(riga,colonna,sala,film,prenotante) VALUES ($riga,$colonna,1,1,'$utente_prenotante')";
    include "dati_connessione.php";
    $conn = new mysqli($server,$user,$password,$db);
    if($result = $conn->query($sql)===TRUE)    {
        echo "Tutto ok";
    }
    else {
        echo "ops";
    }
    $conn->close();
?>
