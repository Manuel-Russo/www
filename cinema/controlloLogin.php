<?php
    session_start();
    include "dati_connessione.php";
    $conn=new mysqli($server,$user,$password,$db);
    try {
        $md5_pwd=md5($_POST['pwd']);
        $sql="SELECT * FROM utente WHERE username='{$_POST['user']}' AND password='$md5_pwd'";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();    
        if($row!=null) {
            $_SESSION['username']=$row['username'];
            $_SESSION['nome']=$row['nome'];
            $_SESSION['cognome']=$row['cognome'];
            header("location:index.php");
        }
        else{
            header("location:login.php");
        }
    } catch (\Throwable $th) {}
?>

