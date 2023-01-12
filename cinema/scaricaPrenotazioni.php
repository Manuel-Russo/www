<?php
    session_start();
    if (!isset($_SESSION['username'])) {
      header('location:login.php');
    }
    include "dati_connessione.php";
    $conn=new mysqli($server,$user,$password,$db);
    $conn->set_charset('utf8'); //collegamento db
    try {
        $sql="SELECT * FROM prenotazioni"; //prendo tutto da prenotazioni
        $result=$conn->query($sql); //applico la query
        $risultato=[]; //creao un vettore per i risultati
        while ($row=$result->fetch_assoc()){ //creo array associativi
            $risultato[]=$row; //inserisco il risultato
        }
        echo json_encode($risultato); //stampo in json il risultato
        $conn->close();//chiudo la connessione
    } catch (\Throwable $th) {}
?>