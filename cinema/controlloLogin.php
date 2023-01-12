<?php
    session_start();
    include "dati_connessione.php";
    $conn=new mysqli($server,$user,$password,$db);
    try {
        $md5_pwd=md5($_POST['pwd']); //trasformo la psw con hash
        $sql="SELECT * FROM utente WHERE username='{$_POST['user']}' AND password='$md5_pwd'"; //seleziono tutto dove l' user e la psw corrispondono
        $result=$conn->query($sql); //applico la query
        $row=$result->fetch_assoc(); //genero array associativi
        if($row!=null) { //se c'è almeno una riga
            $_SESSION['username']=$row['username']; //assegno ad ogni variabile di sessione le informazioni
            $_SESSION['nome']=$row['nome'];
            $_SESSION['cognome']=$row['cognome'];
            header("location:index.php");
        }
        else{
            header("location:login.php");
        }
    } catch (\Throwable $th) {}
?>

