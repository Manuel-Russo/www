<?php
    session_start(); 
    if (!isset($_SESSION['username'])) {
        header('location:login.php');
    } //controllo sessione
    $utente_prenotante=$_SESSION['username']; //assegno l'username di sessione a utente_prenotante
    $riga=$_POST['r']; //riga è ciò che ottengo dal post
    $colonna=$_POST['c'];//stessa cosa colonna
    $sql="DELETE FROM prenotazioni WHERE riga = $riga AND colonna = $colonna"; //query per l'eliminazione della riga della prenotazione
    include "dati_connessione.php"; //ottengo i dati per la connessione al database
    $conn=new mysqli($server,$user,$password,$db); //mi connetto
    $conn->query($sql); //asegno la query
    $conn->close(); //chiudo la connessione
?>