<?php
    session_start();
    $nomeRegistrazione = $_POST['reg_nome'];
    $cognomeRegistrazione = $_POST['reg_cognome'];
    $usernameRegistrazione = $_POST['reg_user'];
    $passwordRegistrazione = $_POST['reg_pwd'];
    $colore = $_POST['reg_color'];
    $psw_criptata = md5($passwordRegistrazione); //ottengo le info dal post e cripto la psw

    include "dati_connessione.php";
    $conn=new mysqli($server,$user,$password,$db); //mi collego a db
    $conn->set_charset("utf8");
    $sql = "SELECT * FROM utente WHERE username = '$usernameRegistrazione'"; //seleziono tutto dove l'username è uguale a quello fornito
    $sql_inserimento = "INSERT INTO utente(username,password,nome,cognome,credito,colore) VALUES ('$usernameRegistrazione','$psw_criptata','$nomeRegistrazione','$cognomeRegistrazione',0,'$colore')"; //inserisco una nuova riga nella tabella degli utenti per la registrazione
    $result=$conn->query($sql); //applico la prima query
    $row = $result->fetch_assoc(); //genero array associativi
    if ($row==null)     { //se non c'è nessuna riga
        $_SESSION['username'] = $usernameRegistrazione;
        $_SESSION['nome'] = $nomeRegistrazione;
        $_SESSION['cognome'] = $cognomeRegistrazione;
        $conn->query($sql_inserimento); //applico le veriabili di sessione e la seconda query
        header('location:index.php');
    }
    else {
        header('location:registrazione.php');
    }
?>