<?php // inzio fase scrittura php
  session_start(); //inizializzo la sessione
  if (!isset($_SESSION['stato']))  { //se la sessione nono è settata ad un valore uguale a stato
    header('location:login.php');//rimando la pagina php del login
  }
?> <!-- chiudo la sessione php -->

<!DOCTYPE html> <!-- inizializzo il tipo a documento html -->
<html lang="it" dir="ltr"> <!-- apro il tag html -->
  <head>
    <script src="js/jquery-3.6.1.min.js"></script> <!-- importo jQuery -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> <!-- importo le librerie bootstrap -->
    <meta charset="utf-8"> <!-- identifico il charset -->
    <link rel="stylesheet" href="css/index.css"> <!-- link per il css -->
    <script type="text/javascript" src="js/index.js"></script> <!-- link per il javascript -->
    <title>Museo</title>
  </head>
  <body>
    <ul class="nav nav-pills justify-content-end"> <!-- tasto per il logout -->
      <li class="nav-item">
        <a class="btn btn-danger" href="logout.php">Logout</a> <!-- href=la pagina che punta dopo averlo premuto -->
      </li>
    </ul>
    <table class="table table-striped"> <!-- inizializzo tabella -->
      <thead>
        <tr>
          <th>Titolo Opera</th> <!-- colonne -->
          <th>Immagine</th>
          <th>Acquista</th>
          <th>Info Autore</th>
        </tr>
      </thead>
      <tbody> <!-- corpo della tabella -->
        <?php //apro fase di php per dialogo con il database
          //connessione al database: siamo all'interno del server web e chiamiamo il server mysql (il DBMS)
          try   { //in php gli oggetti usano le freccie ->
            $conn = new mysqli("localhost","root","gardone","museo"); //(dove sta server msql, utente, psw_utente, nomeDatabase)
            $conn->set_charset("utf8"); //setto charset mysql
            $sql = "SELECT * FROM opera"; //è una query, tutto dalla tabella opera
            $result = $conn->query($sql); //ottengo risultato che andrò a stampare(lancia query e database restituisce dati)
            while($row = $result->fetch_assoc())  { //estraggo array_associativi dal il risultato che la connessione mi restituisce
              $titolo = $row['titolo']; //estraggo dall'array il titolo di ogni opera e lo asseggno
              $titolo = str_replace(" ", '-', $titolo); //sistemo il titolo per il passaggio in js
              $titolo = str_replace("'", '*', $titolo);
              $file_associato = $row['file_associato']; //estraggo il percorso della immagine e la assegno
              $file_associato = str_replace("'", '*', $file_associato);
              $codice_autore = $row['cod_autore']; //estraggo il codice autore di ogni autore per ogni opera e la assegno
              echo "<tr>"; //scrivo in html in ogni colonna per inserire ciò che ho assegnato precedentemente alle variabili
              echo "<td>".$row['titolo']."</td>";
              echo "<td><img class='immagine' src='img/{$row['file_associato']}'></td>"; //inserisco l'immagine
              echo "<td><button onclick=\"apriModal('".$titolo."','".$file_associato."')\" class='btn btn-success'> Acquista ora </button></td>"; //inserisco un bottone che una volta schiacciato avvia una funzione js
              echo "<td><button class='btn btn-success' id='info' onclick=\"richiamoAjax('".$codice_autore."')\"> Informazioni </button></td>"; //inserisco un altro bottone che chiama funzione js
              echo "</tr>"; //chiudo la tabella
            }
          }
          catch(Exception $errore)   { //se la connessione fallisce
            echo "Errore di connessione: ".$errore; //restituisco un codice di errore
          }
        ?> <!-- fine dialogo con db -->
      </tbody>
    </table>
  </body>
</html> <!-- fine doc html -->

<div class="modal fade" id="freddo"> <!-- metto il modal fuori dal doc, per usarlo in js -->
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title" id="titoloDiFreddo"></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body" id="corpoDiFreddo">
        
      </div>

      <div class="modal-footer" id="piediDiFreddo">
        
      </div>

    </div>
  </div>
</div>