<?php
    session_start();
    if (!isset($_SESSION['username'])) {
      header('location:login.php');
    }
    include "dati_connessione.php";
    $conn=new mysqli($server,$user,$password,$db);
    $conn->set_charset('utf8');
    try {
        $sql="SELECT * FROM prenotazioni";
        $result=$conn->query($sql);
        $risultato=[];
        while ($row=$result->fetch_assoc()){
            $risultato[]=$row;
        }
        echo json_encode($risultato);
        $conn->close();
    } catch (\Throwable $th) {}
?>