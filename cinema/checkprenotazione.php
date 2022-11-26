<?php
    session_start();
    if (!isset($_SESSION['username'])) {
      header('location:login.php');
    }
    include "dati_connessione.php";
    $conn=new mysqli($server,$user,$password,$db);
    $conn->set_charset('utf8');
    try {
        $sql="SELECT * FROM prenotazioni WHERE colonna={$_POST['colonna']} AND riga={$_POST['riga']}";
        $result=$conn->query($sql);
        if ($result->num_rows>0)    {
            $row=$result->fetch_assoc();
            if($_SESSION['username']==$row['prenotante']){
                echo "OCCUPATO DA ME";
            }
            else    {
                echo "OCCUPATO";
            }
        }
        else{
            echo "LIBERO";
        }
        $conn->close();
    } catch (\Throwable $th) {}



?>