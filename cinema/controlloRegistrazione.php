<?php
    session_start();
    $nomeRegistrazione = $_POST['reg_nome'];
    $cognomeRegistrazione = $_POST['reg_cognome'];
    $usernameRegistrazione = $_POST['reg_user'];
    $passwordRegistrazione = $_POST['reg_pwd'];
    $colore = $_POST['reg_color'];
    $psw_criptata = md5($passwordRegistrazione);

    include "dati_connessione.php";
    $conn=new mysqli($server,$user,$password,$db);
    $conn->set_charset("utf8");
    $sql = "SELECT * FROM utente WHERE username = '$usernameRegistrazione'";
    $sql_inserimento = "INSERT INTO utente(username,password,nome,cognome,credito,colore) VALUES ('$usernameRegistrazione','$psw_criptata','$nomeRegistrazione','$cognomeRegistrazione',0,'$colore')";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    if ($row==null)     {
        $_SESSION['username'] = $usernameRegistrazione;
        $_SESSION['nome'] = $nomeRegistrazione;
        $_SESSION['cognome'] = $cognomeRegistrazione;
        $conn->query($sql_inserimento);
        header('location:index.php');
    }
    else {
        header('location:registrazione.php');
    }
?>