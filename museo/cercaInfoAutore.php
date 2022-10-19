<?php
  session_start();
  if (!isset($_SESSION['stato']))  {
    header('location:login.php');
  }
  $cod_autore = $_POST['codice_autore']; //ricevo in post dalla funzione ajax il codice autore che mi permette di capire le bio corrispondente
  try   {
    $conn = new mysqli("localhost","root","gardone","museo"); 
    $conn->set_charset("utf8");
    $sql = "SELECT biografia FROM autore WHERE cod_autore = '$cod_autore'"; //codice autore uguale a quello ricevuto in post
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc())  {
      $biografia = $row['biografia'];
      $biografia = str_replace(" ", '-', $biografia);
      $biografia = str_replace("'", '*', $biografia);
      echo $biografia;//stampo biografia per permette ad ajax di ottenerlo
    }
  }
  catch(Exception $errore)   {
    echo "Errore di connessione: ".$errore;
  }
?>