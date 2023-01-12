<?php
    session_start();
    if (!isset($_SESSION['username'])) {
      header('location:login.php');
    }
    include "dati_connessione.php";
    $conn=new mysqli($server,$user,$password,$db); //controllo sessione e collegamento al database
    $conn->set_charset('utf8');
    try {
        $sql="SELECT * FROM prenotazioni WHERE colonna={$_POST['colonna']} AND riga={$_POST['riga']}"; //seleziono tutto per capire dove c'è una prenotazione nella tabella
        $result=$conn->query($sql); //assegno la query
        if ($result->num_rows>0)    { //se c'è più di una riga
            $row=$result->fetch_assoc(); //creo array associativi
            if($_SESSION['username']==$row['prenotante']){ //se l'username di sessione è uguale a quello contenuto in una riga 
                echo "OCCUPATO DA ME"; //stampo
            }
            else    {
                echo "OCCUPATO"; //altrimenti è genericamente occupato
            }
        }
        else{
            echo "LIBERO"; //se no è libero
        }
        $conn->close(); //chiudo la connessione
    } catch (\Throwable $th) {}



?>