<?php //inizio dialogo con il server
  $cod_autore = $_POST['codice_autore']; //ricevo in post dalla funzione ajax il codice autore che mi permette di capire le bio corrispondente
  try   {
    $conn = new mysqli("localhost","root","gardone","museo"); //avvio connsesione db 
    $conn->set_charset("utf8"); //metto il charset
    $sql = "SELECT biografia FROM autore WHERE cod_autore = '$cod_autore'"; //codice autore uguale a quello ricevuto in post
    $result = $conn->query($sql); //assegno risultato come quello che ottengo dalla query
    while($row = $result->fetch_assoc())  { //controllo le biografie degli autori
      $biografia = $row['biografia'];
      $biografia = str_replace(" ", '-', $biografia);
      $biografia = str_replace("'", '*', $biografia);
      echo $biografia;//stampo biografia per permette ad ajax di ottenerlo
    }
  }
  catch(Exception $errore)   { //controllo della connsessione
    echo "Errore di connessione: ".$errore; //stampo errore
  }
?>