<?php
  session_start();
  if (!isset($_SESSION['stato']))  {
    header('location:login.php');
  }
?>

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <script src="js/jquery-3.6.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <script type="text/javascript" src="js/index.js"></script>
    <title>Museo</title>
  </head>
  <body>
    <ul class="nav nav-pills justify-content-end">
      <li class="nav-item">
        <a class="btn btn-danger" href="logout.php">Logout</a>
      </li>
    </ul>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Titolo Opera</th>
          <th>Immagine</th>
          <th>Acquista</th>
          <th>Info Autore</th>
        </tr>
      </thead>
      <tbody>
        <?php
          //connessione al database: siamo all'interno del server web e chiamiamo il server mysql (il DBMS)
          try   { //in php gli oggetti usano le freccie ->
            $conn = new mysqli("localhost","root","gardone","museo"); //(dove sta server msql, utente, psw_utente, nomeDatabase)
            $conn->set_charset("utf8"); //setto charset mysql
            $sql = "SELECT * FROM opera"; //è una query, tutto dalla tabella opera
            $result = $conn->query($sql); //ottengo risultato che andrò a stampare(lancia query e database restituisce dati)
            while($row = $result->fetch_assoc())  { //estraggo array_associativi dal il risultato che la connessione mi restituisce
              $titolo = $row['titolo'];
              $titolo = str_replace(" ", '-', $titolo);
              $titolo = str_replace("'", '*', $titolo);
              $file_associato = $row['file_associato'];
              $file_associato = str_replace("'", '*', $file_associato);
              $codice_autore = $row['cod_autore'];
              echo "<tr>";
              echo "<td>".$row['titolo']."</td>";
              echo "<td><img class='immagine' src='img/{$row['file_associato']}'></td>";
              echo "<td><button onclick=\"apriModal('".$titolo."','".$file_associato."')\" class='btn btn-success'> Acquista ora </button></td>";
              echo "<td><button class='btn btn-success' id='info' onclick=\"richiamoAjax('".$codice_autore."')\"> Informazioni </button></td>";
              echo "</tr>";
            }
          }
          catch(Exception $errore)   {
            echo "Errore di connessione: ".$errore;
          }
        ?>
      </tbody>
    </table>
  </body>
</html>

<div class="modal fade" id="freddo">
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